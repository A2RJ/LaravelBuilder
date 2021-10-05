<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class Generate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:crud';
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
        // $id = $this->argument('id');
        // $name = $this->argument('name');

        // $eloq = require './env.php';
        // dd($eloq['table']);
        // foreach ($eloq as $key => $value) {
        //     print_r($value) . "\n";
        // }
        // die;

        $id = 'id_user';
        $name = 'user';

        $user = new User();
        $user = $user->getFillable();
        $this->index($user, $name, $id);
        $this->create($user, $name);
        $this->edit($user, $name, $id);
        $this->show($user, $name, $id);
    }

    protected function getStub($type)
    {
        return file_get_contents(resource_path("stubs/$type.stub"));
    }

    protected function index($user, $name, $id)
    {
        $listHeader = '';
        $listBody = '';
        
        foreach ($user as $value) {
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

    protected function create($user, $name)
    {
        $listInput = '';
        foreach ($user as $value) {
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

    protected function edit($user, $name, $id)
    {
        $listInput = '';
        foreach ($user as $value) {
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

    protected function show($user, $name, $id)
    {
        $showData = '';
        foreach ($user as $value) {
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
