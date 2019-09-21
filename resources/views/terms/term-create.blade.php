@include('includes.header-admin')
        <div class="center__Container">
                {{-- @include('flash.flash') --}}
            <div class="form__header--list">
                <div class="form__header--list1">
                    <p class="">
                        <img src="../left-arrow.svg" alt="" class="back__arrow"><span class=""><a>Back</a></span>
                    </p>
                </div>
            </div>
            <div class="main__container">
              <form action="{{url('/term-create-post/')}}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="center__container" id="czContainer">
                    <div class="center__container--wrapper control-group after-add-more"">
                        <textarea name="term_desc" class="summernote" placeholder="Policy Description"></textarea>
                        <button class="red__homepage--btn"><span>Save</span></button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</section>
<script src="resources/js/admin.js"></script>
<!-- script for wysiwyg -->
<!-- copy and paste if need be or uncomment -->
{{-- <script type="text/javascript">
    $(document).ready(function() {
     $('.summernote').summernote({
           height: 300,
           width:880,
      });
   });
 </script> --}}
 <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
 <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
 <script>
     $('textarea').ckeditor();
     // $('.textarea').ckeditor(); // if class is prefered.
 </script>
 




