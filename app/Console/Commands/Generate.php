<?php

namespace App\Console\Commands;

use App\Models\Dosen;
use App\Models\User;
use Faker\Provider\ar_SA\Color;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use mysqli;

class Generate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:crud {name} {id}';
    // protected $signature = 'generate:crud {name} {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $id = $this->argument('id');
        $name = ucfirst($this->argument('name'));
        $mysqli = new mysqli(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'), env('DB_DATABASE'));

        /* check connection */
        if (mysqli_connect_error()) {
            printf(mysqli_connect_error());
            exit();
        }

        $query = "SHOW COLUMNS FROM " . $name . 's';
        $result = $mysqli->query($query);

        if (empty($result)) {
            echo "Table tidak ditemukan";
        } else {
            $fields = '';
            while ($rows = $result->fetch_array()) {
                $fields .= '"' . $rows[0] . '", ';
                $row[] = $rows[0];
            }

            echo "\033[31mPlease create controller first\n";
            $this->model($fields, $name);
            echo "\033[32mModel created...100%\n";
            $this->index($row, $name, $id);
            echo "\033[32mIndex created...100%\n";
            $this->create($row, $name);
            echo "\033[32mCreate created...100%\n";
            $this->edit($row, $name, $id);
            echo "\033[32mEdit created...100%\n";
            $this->show($row, $name, $id);
            echo "\033[32mShow created...100%\n";
        }
    }

    protected function getStub($type)
    {
        return file_get_contents(resource_path("stubs/$type.stub"));
    }

    protected function model($fields, $name)
    {
        $template = str_replace(
            ['{{crudName}}', '{{rows}}'],
            [$name, $fields],
            $this->getStub('model')
        );
        file_put_contents(app_path("/Models/{$name}.php"), $template);
    }

    protected function index($row, $name, $id)
    {
        $listHeader = '';
        $listBody = '';

        foreach ($row as $value) {
            $listHeader .= '<th>' . $value . '</th>';
            $listBody .= '<th>{{$data->' . $value . '}}</th>';
        }

        $template = str_replace(
            ['{{crudName}}', '{{id}}', '{{listHeader}}', '{{listBody}}'],
            [$name, $id, $listHeader, $listBody],
            $this->getStub('index')
        );
        file_put_contents(app_path("../resources/views/{$name}s/index.blade.php"), $template);
    }

    protected function create($row, $name)
    {
        $listInput = '';
        foreach ($row as $value) {
            $listInput .= '<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>' . $value . ':</strong>
                    <input type="text" name="' . $value . '" class="form-control" placeholder="' . $value . '">
                </div>
            </div>
            ';
        }
        $template = str_replace(
            ['{{crudName}}', '{{listInput}}'],
            [$name, $listInput],
            $this->getStub('create')
        );
        file_put_contents(app_path("../resources/views/{$name}s/create.blade.php"), $template);
    }

    protected function edit($row, $name, $id)
    {
        $listInput = '';
        foreach ($row as $value) {
            $listInput .= '<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>' . $value . ':</strong>
                    <input type="text" name="' . $value . '" class="form-control" placeholder="{{ $' . $name . '->' . $value . ' }}"
                        value="{{ $' . $name . '->' . $value . ' }}">
                </div>
            </div>
            ';
        }
        $template = str_replace(
            ['{{crudName}}', '{{id}}', '{{listInput}}'],
            [$name, $id, $listInput],
            $this->getStub('edit')
        );
        file_put_contents(app_path("../resources/views/{$name}s/edit.blade.php"), $template);
    }

    protected function show($row, $name, $id)
    {
        $showData = '';
        foreach ($row as $value) {
            $showData .= '<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date Created:</strong>
                    {{ $' . $name . '->' . $value . ' }}
                </div>
            </div>
            ';
        }
        $template = str_replace(
            ['{{crudName}}', '{{id}}', '{{showData}}'],
            [$name, $id, $showData],
            $this->getStub('show')
        );
        file_put_contents(app_path("../resources/views/{$name}s/show.blade.php"), $template);
    }
}
