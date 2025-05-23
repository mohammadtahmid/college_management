<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">



          <div class=" d-flex justify-content-center">
                        <div class="block">
                            <div class="title"><strong class="d-block">Notice Form</strong></div>
                            <div class="block-body">
                                <form action="{{url('add_faculties')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-control-label">Name:</label>
                                        <input type="text" value="{{ old('name') }}" name="name"
                                            placeholder="Enter faculties name" class="form-control">
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">Designation:</label>
                                        <input type="text" value="{{ old('designation') }}" name="designation"
                                            placeholder="Enter faculties designation" class="form-control">
                                        @error('designation')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">Department:</label>
                                        <input type="text" value="{{ old('department') }}" name="department"
                                            placeholder="Enter faculties department" class="form-control">
                                        @error('department')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">Phone:</label>
                                        <input type="text" value="{{ old('phone') }}" name="phone"
                                            placeholder="Enter faculties phone" class="form-control">
                                        @error('phone')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">Email:</label>
                                        <input type="text" value="{{ old('email') }}" name="email"
                                            placeholder="Enter faculties email" class="form-control">
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label class="form-control-label">faculties Image</label>
                                        <input type="file" name="image" class="form-control">
                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group d-flex justify-content-end">
                                        <input type="submit" value="Submit" class="btn btn-success">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>






                    <div class="">
                        <div class="block margin-bottom-sm">
                            <div class="title"><strong>Faculties List</strong></div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <t>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Department</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Image</th>
                                            <th class="d-flex justify-content-center">Action</th>
                                        </t>
                                    </thead>
                                    <tbody>
                                @foreach ($faculties as $faculty)
                                <tr>
                                                <td scope="row">{{ $faculty->name }}</td>
                                                <td>{{ $faculty->designation }}</td>
                                                <td>{{ $faculty->department }}</td>
                                                <td>{{ $faculty->phone }}</td>
                                                <td>{{ $faculty->email }}</td>
                                                <td><img src="{{ url(asset('storage/'.$faculty->image)) }}" class="w-50" alt="">
                                                </td>
                                                <td class="d-flex justify-content-center">
                                                    <a href="{{ url('delete_faculty', $faculty->id) }}"
                                                       onclick="confirmation(event)"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                @endforeach



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>







        <div>
      </div>
    </div>
    <!-- JavaScript files-->
 @include('admin.script')
  </body>
</html>
