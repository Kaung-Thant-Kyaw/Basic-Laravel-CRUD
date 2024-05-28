@props(['post']);
<x-template>
  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <h5 class="text-center">Update Post</h5>
        <form action="{{ url('posts/'.$post->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" 
            name="title" id="title"
            placeholder="Enter post title"
            value="{{$post->title ?? old('title')}}">
          </div>
          @if ($errors->has('title'))
              <div class="text-danger">{{ $errors->first('title') }}</div>
          @endif
          <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control @error('content') is-invalid @enderror"
             name="content" id="content" rows="3"
             placeholder="Enter content.."
             >
            {{ $post->content ?? old('content') }}
            </textarea>
          </div>
          @if ($errors->has('content'))
            <div class="text-danger">{{ $errors->first('content') }}</div>
          @endif
          <button class="btn btn-primary">Update</button>
        </form>
      </div>
 
      <div class="col-md-3"></div>
    </div>
  </div>
</x-template>