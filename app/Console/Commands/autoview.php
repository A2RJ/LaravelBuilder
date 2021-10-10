<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class autoview extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:crud {name} {id}';

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
        $name = $this->argument('name');
        $this->index($name, $id);
        $this->create($name);
        $this->edit($name, $id);
        $this->show($name, $id);
    }

    protected function getStub($type)
    {
        return file_get_contents(resource_path("stubs/$type.stub"));
    }

    protected function index($name, $id)
    {
        $user = new User();
        $listHeader = '';
        foreach ($user->getFillable() as $value) {
            $listHeader .= '<th>' . $value . '</th>';
        }
        $listBody = '';
        foreach ($user->getFillable() as $value) {
            $listBody .= '<th>{{$data->' . $value . '}}</th>';
        }
        $template = str_replace(
            ['{{crudName}}', '{{id}}', '{{listHeader}}', '{{listBody}}'],
            [$name, $id, $listHeader, $listBody],
            $this->getStub('index')
        );
        file_put_contents(app_path("../resources/views/{$name}s/index.blade.php"), $template);
    }

    protected function create($name)
    {
        $user = new User();
        $listInput = '';
        foreach ($user->getFillable() as $value) {
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

    protected function edit($name, $id)
    {
        $user = new User();
        $listInput = '';
        foreach ($user->getFillable() as $value) {
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

    protected function show($name, $id)
    {
        $user = new User();
        $showData = '';
        foreach ($user->getFillable() as $value) {
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
