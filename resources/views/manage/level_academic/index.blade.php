@extends('layouts.manage')

@section('content')
<div class="flex-container">
    <div class="columns m-t-20">
        <div class="column">
            <h2 class="title">Manage Academic Levels</h2>
            @if(Session::has('msg_del'))
            <div class="notification is-danger">
                <button class="delete"></button>
                {{ session('msg_del') }}
              </div>
            @endif

            <hr class="hr-special">
	
            <div class="box">
                <h2 class="title ">Add New Academic Level</h2>
                <p class="subtitle">Please Enter Academic Level Title and Press "Add New Level Academic"</p>

                @if($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="notification is-danger">
                        <button class="delete"></button>
                        {{ $error }}
                      </div>
                    @endforeach
                @endif

                @if(Session::has('msg'))
                <div class="notification is-success">
                    <button class="delete"></button>
                    {{ session('msg') }}
                  </div>
                @endif


                <form action="{{ route('manage.academic_level.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="content">
                        <div class="columns">
                            <div class="column">
                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                    <label class="label">Title (English)</label>
                                    </div>
                                    <div class="field-body">
                                    <div class="field">
                                        <p class="control">
                                        <input class="input" type="text" name="title_en" placeholder="Enter Title (English)" >
                                        </p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                    <label class="label">Title (عربي)</label>
                                    </div>
                                    <div class="field-body">
                                    <div class="field">
                                        <p class="control">
                                        <input class="input" dir="auto" type="text" name="title_ar" placeholder="Enter Title (عربي)" >
                                        </p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="buttons is-centered">
                            <button name="submit" value="Submit" type="submit" class="button is-info"><i class="fa fa-plus m-r-10"></i>Add New Academic Level</button>
                        </div>
                    </div>
                </form>
            </div>
            <hr class="hr-special">
            <div class="card">
                <div class="card-content">
                    <table class="table is-striped is-narrow">
                        <thead>
                            <tr>
                                <th>Count</th>
                                <th>Title</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
        
                        <tbody>
                        @forelse($levels as $index => $level)
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td>{{ $level->title_en }} <br> {{ $level->title_ar }}</td>
                                
                                <td><a href="{{ route('manage.academic_level.delete', $level->id) }}" class="button is-danger">
                                    <i class="fa fa-trash fa-lg"></i>
                                </a></td>
                            </tr>
                        @empty
                        <tr style="color: red">
                          <td>Academic Levels Table Is Empty</td>
                        </tr>
                        @endforelse

                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>

    
</div>
@endsection