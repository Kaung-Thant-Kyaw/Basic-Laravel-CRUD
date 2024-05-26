<x-template>
  <div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <h5 class="text-center mb-3">Posts List</h5>
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
              <tr>
                <td>1</td>
                <td>PHP</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. </td>
                <td>
                  <button class="btn btn-warning btn-sm">
                    <i class="fa fa-edit"></i> Edit
                  </button>
                  <button class="btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i> Delete
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
</x-template>