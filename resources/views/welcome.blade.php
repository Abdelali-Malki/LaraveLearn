@foreach ($results as $task)
<h1>{{$task->name}}</h1>
@foreach ($task->omar as $item)
<h1>{{$item->name}}</h1>
@endforeach

    
@endforeach