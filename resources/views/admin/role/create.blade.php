@include('admin/layouts/admindefaultheader')

<div class="content-wrapper">

   <!-- Content Header (Page header) -->
   	<section class="content-header">
      	<div class="container-fluid">
         	<div class="row mb-2">
            	<div class="col-sm-6">
               		<h1 class="m-0 text-dark">Role</h1>
            	</div><!-- /.col -->

            	<div class="col-sm-6">
               		<ol class="breadcrumb float-sm-right">
                  		<li class="breadcrumb-item"><a href="#">Create New Role</a></li>
                 		 <li class="breadcrumb-item active">Role</li>
               		</ol>
            	</div><!-- /.col -->
         	</div><!-- /.row -->
      	</div><!-- /.container-fluid -->
   	</section>
   <!-- /.content-header -->

   <!-- general form elements -->
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-9">
               <div class="card card-primary card-info">
                  <div class="card-header">
                     <h3 class="card-title">Create Role</h3>
                  </div>

                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form" action="{{ route('role.store')}}" method="post">
                     @csrf
                     <div class="card-body">
                        
                        <div class="form-group">
                           <label for="name">Role Name</label>
                           <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" placeholder="Enter Role Name">
                            @if ($errors->has('name'))
                              <span class="invalid-feedback">
                                 <strong>Role {{ $errors->first('Role Name') }}</strong>
                              </span>
                           @endif
                        </div>

                        <div class="col-lg-12 d-inline-block">
                           
                           <div class="col-lg-4 float-left">
                              <label for="name">Posts Permissions</label>
                              @foreach ($permissions as $permission)
                                 @if ($permission->for == 'post')
                                    <div class="checkbox">
                                       <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}</label>
                                    </div>
                                 @endif
                              @endforeach
                           </div>

                           <div class="col-lg-4 float-left">
                              <label for="name">User Permissions</label>
                              @foreach ($permissions as $permission)
                                 @if ($permission->for == 'user')
                                    <div class="checkbox">
                                       <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}</label>
                                    </div>
                                 @endif
                              @endforeach
                           </div>


                           <div class="col-lg-4 float-left">
                              <label for="name">User Permissions</label>
                              @foreach ($permissions as $permission)
                                 @if ($permission->for == 'other')
                                    <div class="checkbox">
                                       <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}</label>
                                    </div>
                                 @endif
                              @endforeach
                          </div>
                        </div>
                     </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                </div>   
               </div>
         </div>
      </div>
   </section>      <!-- /.card --> 
</div>


@include('admin/layouts/admindefaultfooter')  