@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row py-5">
      <div class="col-10 offset-1">
         <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Author</th>
                <th scope="col">Title</th>
                <th scope="col">Date</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
               @forelse ($posts as $post)                  
                  <tr>
                     <td>
                        {{ $post->id }}
                     </td>
                     <td>
                        {{ $post->user->name }}
                     </td>
                     <td>
                        <a href="{{ route('admin.posts.show', $post->id) }}">
                           {{ $post->title }}
                        </a>
                     </td>
                     <td>
                        <small>{{ $post->date }}</small>
                     </td>
                     <td>
                        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-outline-primary">Edit</a>
                     </td>
                     <td>
                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                           @csrf
                           @method('DELETE')
         
                           <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                     </td>
                  </tr>
               @empty
                  <h2 class="text-center">No posts to show</h2>
               @endforelse
            </tbody>
          </table>
      </div>
   </div>
</div>
@endsection