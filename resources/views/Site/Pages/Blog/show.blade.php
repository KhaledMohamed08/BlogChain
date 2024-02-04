<x-Site.template>
   @section('styles')
       <style>
         .actions ul li{
            list-style: none;
            float: left;
         }
         .actionsBtn{
            padding: 0;
            margin-right: 15px;
            font-size: 22px;
            font-weight: bold;
         }
       </style>
   @endsection
    <!-- content
   ================================================== -->
   <section id="content-wrap" class="blog-single">
    <div class="row">
        <div class="col-twelve">

            <article class="format-standard">
                @if (session('sucss'))
                    <div class="alert-box ss-success hideit">
                        <p>{{ session('sucss') }}</p>
                        <i class="fa fa-times close"></i>
                    </div><!-- /success -->
                @endif
                @if (session('fail'))
                    <div class="alert-box ss-error hideit">
                        <p>{{ session('fail') }}</p>
                        <i class="fa fa-times close"></i>
                    </div><!-- /error -->
                @endif
                <div class="content-media">
                     <div class="post-thumb">
                         <img src="{{ $blog->getFirstMediaUrl('blog_cover') }}"> 
                     </div>  
                 </div>

                 <div class="primary-content">
                    @can('update', $blog)
                    <div class="actions" style="float: right">
                        <ul>
                            <li>
                                <button class="actionsBtn" style="background: none; border: none; cursor: pointer;"><a href="{{ route('blog.edit', $blog->id) }}" style="color: green;"><i class="fa fa-pencil"></i></a></button>
                            </li>
                            <li>
                                <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                    @method('DELETE')
                                    @csrf
                                    <button class="actionsBtn" type="submit" style="color: red; background: none; border: none; cursor: pointer;"><i class="fa fa-trash"></i></button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    @endcan

                    <h1 class="page-title">{{ $blog->title }}</h1>

                    <ul class="entry-meta">
                        <li class="date">{{ $blog->created_at }}</li>						
                        <li class="cat"><a href="">Wordpress</a><a href="">Design</a></li>				
                    </ul>						

                    <p>{!! $blog->content !!}</p>

                    <p class="tags">
                        <span>Tagged in :</span>
                            <a href="#">orci</a><a href="#">lectus</a><a href="#">varius</a><a href="#">turpis</a>
                    </p>

                    <div class="author-profile">
                        <img src="{{ $blog->user->getFirstMediaUrl('images') }}" alt="author_image">

                        <div class="about">
                            <h4><a href="#">{{ $blog->user->name }}</a></h4>
                        
                            <p>Alias aperiam at debitis deserunt dignissimos dolorem doloribus, fuga fugiat impedit laudantium magni maxime nihil nisi quidem quisquam sed ullam voluptas voluptatum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>

                            <ul class="author-social">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">GooglePlus</a></li>
                                <li><a href="#">Instagram</i></a></li>					        	
                            </ul>
                        </div>
                    </div> <!-- end author-profile -->						

                 </div> <!-- end entry-primary -->
                  {{-- <div class="pagenav group">
                      <div class="prev-nav">
                          <a href="#" rel="prev">
                              <span>Previous</span>
                              Tips on Minimalist Design 
                          </a>
                      </div>
                       <div class="next-nav">
                           <a href="#" rel="next">
                               <span>Next</span>
                              Less Is More 
                           </a>
                       </div>  				   
                  </div> --}}

             </article>
        

         </div> <!-- end col-twelve -->
    </div> <!-- end row -->

     <div class="comments-wrap">
         <div id="comments" class="row">
             <div class="col-full">

            <h3>Comments</h3>

            <!-- commentlist -->
            <ol class="commentlist">

               <li class="depth-1">

                  <div class="avatar">
                     <img width="50" height="50" class="avatar" src="images/avatars/user-01.jpg" alt="">
                  </div>

                  <div class="comment-content">

                      <div class="comment-info">
                         <cite>Itachi Uchiha</cite>

                         <div class="comment-meta">
                            <time class="comment-time" datetime="2014-07-12T23:05">Jul 12, 2014 @ 23:05</time>
                         </div>
                      </div>

                      <div class="comment-text">
                         <p>Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate,
                         facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.</p>
                      </div>

                   </div>

               </li>

            </ol> <!-- Commentlist End -->					

            <!-- respond -->
            <div class="respond">

                <h3>Leave a Comment</h3>

               <form name="contactForm" id="contactForm" method="post" action="">
                      <fieldset>

                  <div class="form-field">
                             <input name="cName" type="text" id="cName" class="full-width" placeholder="Your Name" value="">
                  </div>

                  <div class="form-field">
                             <input name="cEmail" type="text" id="cEmail" class="full-width" placeholder="Your Email" value="">
                  </div>

                  <div class="form-field">
                             <input name="cWebsite" type="text" id="cWebsite" class="full-width" placeholder="Website"  value="">
                  </div>

                  <div class="message form-field">
                     <textarea name="cMessage" id="cMessage" class="full-width" placeholder="Your Message" ></textarea>
                  </div>

                  <button type="submit" class="submit button-primary">Submit</button>

                      </fieldset>
                     </form> <!-- Form End -->

            </div> <!-- Respond End -->

          </div> <!-- end col-full -->
      </div> <!-- end row comments -->
     </div> <!-- end comments-wrap -->

</section> <!-- end content -->
</x-Site.template>