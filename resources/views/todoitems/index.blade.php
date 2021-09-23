<h1>Welkom</h1>

<p>Goedenavond!</p>

{{Form::open()}}

{{Form::label('Title')}}
{{Form::text('title', '', ['required' => 'required'])}}

{{Form::label('Status')}}
{{Form::number('status')}}

{{Form::submit()}}

{{Form::close()}}
