@foreach($posts as $post)

<tr id="{{ $post->id }}">
    <td>{{ $post->id }}</td>
    <td>{{ $post->title }}</td>
    <td>{{ $post->slug }}</td>
    <td>{{ substr($post->body,0,50) }}{{ strlen($post->body)>50 ? "..." : "" }}</td>
    <td>{{ $post->published }}</td>
    <td>{{ $post->image }}</td>
    <td>{{ $post->username }}</td>
    <td>{{ $post->vote }}</td>
    <td>{{ $post->view }}</td>
    <td>
        <a href="#" class="btn btn-info btn-xs" id="view" data-id="{{$post->id}}">{{ trans('language.View-Crud') }}</a>
        <a href="#" class="btn btn-success btn-xs" id="edit" data-id="{{$post->id}}">{{ trans('language.Edit-Crud') }}</a>
        <a href="#" class="btn btn-danger btn-xs" id="delete" data-id="{{$post->id}}">{{ trans('language.Delete-Crud') }}</a>
    </td>
</tr>

@endforeach
