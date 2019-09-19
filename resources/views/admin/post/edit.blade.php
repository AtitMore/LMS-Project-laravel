@include('admin/layouts/admindefaultheader')

<div class="content-wrapper">

   <!-- Content Header (Page header) -->
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-6">
                     <h1 class="m-0 text-dark">New Post</h1>
               </div><!-- /.col -->

               <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Post</a></li>
                      <li class="breadcrumb-item active">Create New Post</li>
                     </ol>
               </div><!-- /.col -->
            </div><!-- /.row -->
         </div><!-- /.container-fluid -->
      </section>
   <!-- /.content-header -->
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-8 float-left">
               <form role="form" action = "{{ route('post.update',$post->id) }}" method="post" enctype="multipart/form-data">
               @csrf
               @method('PATCH')
               <div class="card card-outline card-info">
                  
                  <div class="card-header">
                     <div class="form-group">
                        <label for="title" name="title">Post Title</label>
                        <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }} form-control-lg col-md-11" type="text" placeholder="Write Tile" id="title" name="title" id="title" value="{{ $post->title }}">
                        @if ($errors->has('title'))
                           <span class="invalid-feedback">
                              <strong>{{ $errors->first('title') }}</strong>
                           </span>
                        @endif
                     </div>

                     <div class="form-group">
                        <label for="subtitle">Post Sub Title</label>
                        <input type="text" class="form-control{{ $errors->has('subtitle') ? ' is-invalid' : '' }} col-md-11" id="subtitle" name="subtitle" placeholder="Sub Title" value="{{ $post->subtitle }}">
                         @if ($errors->has('subtitle'))
                           <span class="invalid-feedback">
                              <strong>{{ $errors->first('subtitle') }}</strong>
                           </span>
                        @endif
                     </div>

                     <div class="form-group">
                        <label for="slug">Post Slug</label>
                        <input type="text" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }} col-md-11" id="slug" name="slug" placeholder="Slug" value="{{ str_slug($post->slug) }}">
                        @if ($errors->has('slug'))
                           <span class="invalid-feedback">
                              <strong>{{ $errors->first('slug') }}</strong>
                           </span>
                        @endif
                     </div>
                     <!-- tools box -->

                     <div class="card-tools">
                        <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                     </div>
                  </div>

                  <!-- /.card-header -->
                  <div class="card-body pad">
                     <div class="mb-3">
                        <textarea class="textarea form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" placeholder="Write A Post Here" name="body" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor">{{ $post->body }}</textarea>

                        @if ($errors->has('body'))
                           <span class="invalid-feedback">
                              <strong>{{ $errors->first('body') }}</strong>
                           </span>
                        @endif
                     </div>  
                  </div>
               </div>
            </div>

            <div class="float-right col-md-4">
               <div class="col-md-12 float-right">
                  <div class="card card-outline card-info">
                     <div class="card-header">    
                        <div class="form-group">
                           <label for="image" name="image">Upload Image</label>
                           <img src="{{ url(Storage::disk('local')->url($post->image)) }}" alt="" width="150px" height="100px">
                           <input type="file" name="image" id="image">
                        
                        </div>
                     </div>
                  </div>
               </div>

              
               <div class="col-md-12 float-right">
                  <div class="card card-outline card-info">
                     <div class="card-header">    
                        <div class="form-group">
                           <label for="publish">
                              <input type="checkbox" name="status"  value="1" @if ($post->status == 1){ checked } @endif> Publish
                           </label> 
                        </div>

                        <div class="col-md-11">                        
                           <div class="form-group"> 
                              <label>Select Tags</label>
                              <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tags[]">
                                 @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}"
                                       @foreach ($post->tags as $postTag)
                                          @if ($postTag->id == $tag->id)
                                             selected
                                          @endif
                                       @endforeach
                                    >{{ $tag->name }}</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>

                        <div class="col-md-11">
                           <div class="form-group">
                              <label>Select Category</label>
                              <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="categories[]">
                                 @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                       @foreach ($post->categories as $postCategory)
                                          @if ($postCategory->id == $category->id)
                                             selected
                                          @endif
                                       @endforeach
                                       >{{ $category->name }}</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>

                        <div class="box-footer">
                           <input type="submit" class="btn btn-primary" value="Update">
                           <a href="{{ route('post.index') }}" class="btn btn-warning">Back</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            </form>
         </div>
      </div>
   </section>
</div>


@include('admin/layouts/admindefaultfooter')  