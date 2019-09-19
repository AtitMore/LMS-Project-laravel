@include('admin/layouts/admindefaultheader')

<div class="content-wrapper">

   <!-- Content Header (Page header) -->
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-6">
                     <h1 class="m-0 text-dark">User</h1>
               </div><!-- /.col -->

               <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Create New User</a></li>
                      <li class="breadcrumb-item active">User</li>
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
                     <h3 class="card-title">Create User</h3>
                  </div>

                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form" action="{{ route('user.update',$user->id) }}" method="post">
                     @csrf
                     @method('PUT')
                     <div class="card-body">
                        <div class="form-group">
                           <label for="firstname">First Name</label>
                           <input type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" id="firstname" name="firstname" placeholder="Enter First Name" value="@if(old('firstname')){{ old('firstname') }} @else {{ $user->firstname }} @endif">
                            @if ($errors->has('firstname'))
                              <span class="invalid-feedback">
                                 <strong>Tag {{ $errors->first('firstname') }}</strong>
                              </span>
                           @endif
                        </div>

                        <div class="form-group">
                           <label for="lastname">Last Name</label>
                           <input type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" id="lastname" name="lastname" placeholder="Enter Last Name" value="@if (old('lastname')){{ old('lastname') }}@else{{ $user->lastname }}@endif">
                            
                            @if ($errors->has('lastname'))
                              <span class="invalid-feedback">
                                 <strong>Tag {{ $errors->first('lastname') }}</strong>
                              </span>
                           @endif
                        </div>
                              
                        <div class="form-group">
                           <label for="email">Email Address</label>
                           <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" placeholder="Enter Email Address" value=" @if (old('email')){{ old('email') }}@else{{ $user->email }}@endif">
                           @if ($errors->has('email'))
                              <span class="invalid-feedback">
                                 <strong>{{ $errors->first('email') }}</strong>
                              </span>
                           @endif
                        </div>

                        <!--

                        <div class="form-group">
                           <label for="password">Password</label>
                           <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" placeholder="Enter Password">
                           @if ($errors->has('password'))
                              <span class="invalid-feedback">
                                 <strong>{{ $errors->first('password') }}</strong>
                              </span>
                           @endif
                        </div>

                        <div class="form-group">
                           <label for="confirmpassword">Confirm Password</label>
                           <input type="password" class="form-control{{ $errors->has('confirmpassword') ? ' is-invalid' : '' }}" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password">
                           @if ($errors->has('confirmpassword'))
                              <span class="invalid-feedback">
                                 <strong>{{ $errors->first('confirmpassword') }}</strong>
                              </span>
                           @endif
                        </div> -->

                        
                        <div class="form-group">
                           <label for="confirm_passowrd">Status</label>
                           <div class="checkbox">
                              <label ><input type="checkbox" name="status" 
                              @if (old('status')==1 || $user->status == 1)
                                 checked
                              @endif value="1" >Status</label>
                           </div>
                        </div>


                        <div class="form-group">
                           <label>Assign Role</label>
                           <div class="row">
                              @foreach ($roles as $role)
                                 <div class="col-lg-3">
                                    <div class="checkbox">
                                       <label ><input type="checkbox" name="role[]" value="{{ $role->id }}" 
                                          @foreach ($user->roles as $user_role)
                                             @if ($user_role->id == $role->id)
                                                checked
                                             @endif
                                          @endforeach>{{ $role->name }}</label>
                                    </div>
                                 </div>
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