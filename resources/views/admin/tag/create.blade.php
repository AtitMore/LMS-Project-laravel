@include('admin/layouts/admindefaultheader')

<div class="content-wrapper">

   <!-- Content Header (Page header) -->
   	<section class="content-header">
      	<div class="container-fluid">
         	<div class="row mb-2">
            	<div class="col-sm-6">
               		<h1 class="m-0 text-dark">Tag</h1>
            	</div><!-- /.col -->

            	<div class="col-sm-6">
               		<ol class="breadcrumb float-sm-right">
                  		<li class="breadcrumb-item"><a href="#">Create New Tag</a></li>
                 		 <li class="breadcrumb-item active">Tag</li>
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
                     <h3 class="card-title">Create Tag</h3>
                  </div>

                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form" action="{{ route('tag.store')}}" method="post">
                     @csrf
                     <div class="card-body">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Tag Name</label>
                           <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" placeholder="Enter Tag Name">
                            @if ($errors->has('name'))
                              <span class="invalid-feedback">
                                 <strong>Tag {{ $errors->first('name') }}</strong>
                              </span>
                           @endif
                        </div>
                              
                        <div class="form-group">
                           <label for="exampleInputPassword1">Slug</label>
                           <input type="text" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" id="slug" name="slug" placeholder="Enter Slug">
                           @if ($errors->has('slug'))
                              <span class="invalid-feedback">
                                 <strong>{{ $errors->first('slug') }}</strong>
                              </span>
                           @endif
                        </div>

                        <!-- textarea -->
                        <div class="form-group">
                           <label>Description</label>
                           <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" rows="3" id="description" name="description" placeholder="Enter Description"></textarea>
                           @if ($errors->has('description'))
                              <span class="invalid-feedback">
                                 <strong>Tag {{ $errors->first('description') }}</strong>
                              </span>
                           @endif
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