@include('includes.header-admin')

        <div class="center__Container">
            <div class="form__header--list">

                <div class="form__header--list1">
                    <p class="">
                        <img src="../left-arrow.svg" alt="" class="back__arrow"><span class=""><a>Back</a></span>

                    </p>

                </div>

            </div>
            <div class="form__header--list">

                    <div class="form__header--list1">
                        <p class="">

                            <a href="{{url('/talents-create/')}}" class="btn btn-success">Create Talent</a>
                        </p>

                    </div>

                </div>


            <div class="main__container">

                    <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>

                                  <th>Title</th>
                                  <th scope="col">Description</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach($talents as $talent)
                                <tr>
                                  <td>{{$talent->title}}</td>
                                 <td>   <?php echo str_limit(html_entity_decode(strip_tags($talent->description)), $limit = 50, $end = '...'); ?></td>

                                  <td>
                                        <div class="dropdown">
                                                <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Action
                                                <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                  {{-- <li><a href="{{url('/talents-create/')}}">Create</a></li> --}}
                                                  <li><a href="{{url('/talent-edit-post/'.$talent->id)}}">Edit</a></li>

                                                  <li>
                                                        <form action="{{url('/talent-delete/'.$talent->id)}}" method="post" onclick="return confirm('Are you sure?')">
                                                            <input  type="submit" value="Delete" />
                                                            <input type="hidden" name="_method" value="delete" />
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        </form>

                                                    {{-- <a  onclick="return confirm('Are you sure?')"  href="{{url('/talent-delete/'.$talent->id)}}">Delete</a> --}}

                                                </li>
                                                </ul>
                                              </div>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
            </div>


        </div>

    </div>


</section>
<script src="resources/js/admin.js"></script>

{{-- <script type="text/javascript">


    $(document).ready(function() {


      $(".add-more").click(function(){
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });


      $("body").on("click",".remove",function(){
          $(this).parents(".control-group").remove();
      });


    });


</script> --}}
<!-- script for wysiwyg -->

<!-- copy and paste if need be or uncomment -->

<script type="text/javascript">



    $(document).ready(function() {



     $('.summernote').summernote({



           height: 300,
           width:880,



      });



   });



 </script>
<!-- end of  wysiwyg --?


</body>
</html>

