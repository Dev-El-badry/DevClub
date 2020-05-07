@extends('layouts.manage')

@section('content')

<div class="flex-container">
    <div class="columns m-t-20">
        <div class="column">
            <h2 class="title">
                Upload New Prices 
            </h2>
            <p class="subtitle">
                ({{ $category->title_en }})
            </p>
        </div>
    </div>

    <div class="hr-special"></div>
    @if(Session::has('msg'))
    <div class="notification is-success">
        <button class="delete"></button>
        {{ session('msg') }}
      </div>
    @endif

    @if(Session::has('msg_del'))
    <div class="notification is-danger">
        <button class="delete"></button>
        {{ session('msg_del') }}
      </div>
    @endif

    <form action="{{ route('manage.levels_assign.store', $updated_id) }}" method="POST" class="box">
        @if($errors->any())
		@foreach ($errors->all() as $error)
		<div class="notification is-danger">
			<button class="delete"></button>
			{{ $error }}
		</div>
		@endforeach
	@endif
        <div class="columns ">
            <div class="column ">
                {{ csrf_field() }}
                <div class="field">
                    <label for="level_id" class="label">Academic Levels</label>
                    <div class="select is-primary  is-fullwidth">
                        <select name="level_id" id="" class="select">
                            <option value="">Choose Level</option>
                            @foreach ($levels as $level)
                                <option value="{{ $level->id }}">{{ $level->title_en }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="field">
                    <label for="deadline_id" class="label">Deadlines</label>
                    <div class="select is-info is-fullwidth">
                        <select name="deadline_id" id="" class="select">
                            <option value="">Choose Deadline</option>
                          @foreach ($deadlines as $deadline)
                              <option value="{{ $deadline->id }}">{{ $deadline->period }}</option>
                          @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="field">
                    <label for="cost" class="label ">Cost</label>
                   <input type="number" id="cost" name="cost" class="input is-success" placeholder="Enter Cost Ex: ( 15 )$">
                </div>
            </div>
        </div>

        <div class="hr-special"></div>

        <div class="columns">
            <div class="column">
                <div class="buttons">
                    <button class="button is-primary" type="submit" name="submit" value="Submit">Submit</button>
                    <button class="button is-danger" type="submit" name="submit" value="Cancel">Cancel</button>
                </div>
            </div>
        </div>

    </form>

    <hr class="hr-special">
    <div class="card">
        <div class="card-content">
            <table class="table is-striped is-narrow">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Level Academic</th>
                        <th>Deadline</th>
                        <th>Cost</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                @forelse($levels_assign as $level)
                    <tr>
                        <td>{{ $level->id }}</td>
                        <td>{{ $level->levels->title_en }} <hr> {{ $level->levels->title_ar }} </td>
                        <td>{{ $level->deadlines->period }}  </td>
                        <td>{{ $level->cost }}  </td>
                        
                        <td><a href="{{ route('manage.levels_assign.delete', $level->id) }}" class="button is-danger">
                            <i class="fa fa-trash fa-lg"></i>
                        </a></td>
                    </tr>

                @empty
                <tr style="color: red">
                  <td> List Of Prices  Is Empty</td>
                </tr>

                @endforelse
                </tbody>
            </table>
        </div>
    </div>


</div>

@endsection