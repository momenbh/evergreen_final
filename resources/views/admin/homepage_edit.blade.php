@extends('admin.layouts.main')

@section('main-container')


<!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing">
                    

                    <div class="col-md-12" style="margin-bottom:24px;">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h2>Homepage Edit</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                @foreach ( $home as $data )
                                    
                                
                                <form action="{{route('homepage_edit_store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">About section Title</label>
                                                <input type="text" class="form-control" name="about_section_title" value="<?php
                                                if (!empty($data)) {
                                                echo $data->about_section_title;
                                                }
                                                ?>" placeholder="About section Title">
                                            </div>
                                            <div class="form-group col-md-6">
                                                    <label for="description">Description</label>
                                                    <textarea  type="textarea" name="about_description" class="form-control" ><?php
                                                    if (!empty($data)) {
                                                    echo $data->about_description;
                                                    }
                                                    ?></textarea>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Experience Year</label>
                                                <input type="number" class="form-control" name="experience_year" value="<?php
                                                if (!empty($data)) {
                                                echo $data->experience_year;
                                                }
                                                ?>">
                                            </div>
                                        </div>

                                        <div class="row layout-top-spacing">

                                            <div id="fuSingleFile" class="col-lg-12 layout-spacing">
                                                <div class="statbox widget box box-shadow">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                            <h4>About section image</h4>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content widget-content-area">
                                                        <div class="custom-file-container"
                                                            data-upload-id="myFirstImage">
                                                            <label>Upload (Single File) <a href="javascript:void(0)"
                                                                    class="custom-file-container__image-clear"
                                                                    title="Clear Image">x</a></label>
                                                            <label class="custom-file-container__custom-file">
                                                                <input type="file" name="about_image"
                                                                    class="custom-file-container__custom-file__custom-file-input"
                                                                    accept="image/*">
                                                                <input type="hidden"
                                                                    value="10485760" />
                                                                <span
                                                                    class="custom-file-container__custom-file__custom-file-control"></span>
                                                            </label>
                                                            <div class="custom-file-container__image-preview"></div>
                                                        </div>
                                    
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        
                                      <button type="submit" class="btn btn-primary mt-3">Save</button>
                                    </form>

                                    @endforeach
                            </div>
                        </div>
                    </div>
                

                </div>
            </div>


            

<script type="text/javascript">
    var secondUpload = new FileUploadWithPreview('mySecondImage')
</script>



@endsection