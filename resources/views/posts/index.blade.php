@props(['posts']);
<x-template>
  <div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <h5>Posts List</h5>
        <a href="/posts/create">
          <button class="btn btn-primary btn-sm float-right">
            <i class="fas fa-plus-circle"></i>Add New
          </button>
        </a>
          @if (Session('successAlert'))
              <div class="alert alert-success alert-dismissible show fade">
                <strong>{{ Session('successAlert') }}</strong>
                <button class="close" data-dismiss="alert">
                  &times;
                </button>
              </div>
          @endif
          <table class="table table-bordered table-hover shadow-md">
            <thead>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($posts as $post)
                  <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>
                      <a href="{{url("posts/".$post->id."/edit")}}">
                        <button class="btn btn-warning btn-sm">
                          <i class="fa fa-edit"></i> Edit
                        </button>
                      </a>
                      <button class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i> Delete
                      </button>
                    </td>
                  </tr>
              @endforeach
            </tbody>
          </table>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
</x-template>