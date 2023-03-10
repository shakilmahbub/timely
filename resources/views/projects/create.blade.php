<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Project') }}
        </h2>
    </x-slot>
    <div class="p-6 text-gray-900">

        <div class="panel-heading clearfix">
            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('projects.index') }}" class="btn btn-primary" title="Show All projects">
                    Projects
                </a>
            </div>

        </div>

        <div class="panel-body">

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('projects.store') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include ('projects.form', [
                                        'project' => null,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="save">
                    </div>
                </div>

            </form>

        </div>
    </div>

</x-app-layout>


