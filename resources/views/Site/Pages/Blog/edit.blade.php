<x-Site.template>
    @section('styles')
        <style>
            .page-title{
                text-align: center;
                margin: 3rem;
            }
            #deleteImage{
                display: inline-block;
                color: white;
                cursor: pointer;
                background-color: black;
                border-radius: 50%;
                border: 3px solid white;
                width: 30px;
                height: 30px; /* Ensure the height matches the width for a perfect circle */
                line-height: 26px; /* Center the "X" vertically */
                text-align: center; /* Center the "X" horizontally */
                position: absolute;
                top: 25px;
                left: -10px; /* Changed from right to left */
                transition: transform 0.5s; /* Added transition for the rotation effect */
            }
            .image-container{
                position: relative;
            }
            #deleteImage:hover{
                transform: rotate(360deg); /* Rotate 360 degrees on hover */
            }
        </style>
    @endsection
    <div class="row">
        <div class="tap-full page-title">
            <h1>Edit Blog</h1>
        </div>
        <div class="tab-full">

            <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div>
                    <label for="title">Blog title</label>
                    <input class="full-width" type="text" id="title" name="title" value="{{ $blog->title }}">
                </div>
                <div>
                    <label for="content">Your Blog</label>
                    <textarea id="inp_editor1" name="content" class="full-width" placeholder="write your blog here..." >{{ $blog->content }}</textarea>
                </div>
                {{-- <div>
                    <label for="content">Your Blog</label>
                    <textarea class="full-width" placeholder="write your blog here..." id="content" name="content">{{ $blog->content }}</textarea>
                </div> --}}
                @if ($blog->getFirstMediaUrl('blog_cover'))
                <div class="image-container">
                    <label>Blog image</label>
                    <span id="deleteImage" onclick="deleteCover('{{ $blog->id }}')"><i class="fa fa-trash"></i></span>
                    <img src="{{ $blog->getFirstMediaUrl('blog_cover') }}" alt="blog_image" class="full-width" style="width: 750px">
                </div>
                @endif
                <div>
                    <label for="image">Change Blog image</label>
                    <input type="file" id="image" name="image">
                </div>

                {{-- <label class="add-bottom">
                      <input type="checkbox">			            
                      <span class="label-text">Send a copy to yourself</span>
                   </label> --}}

                <input class="button-primary full-width-on-mobile full-width" type="submit" value="update your blog">

            </form>

        </div>
    </div>

    @section('scripts')
        <script>
            async function deleteCover(id) {
                const apiUrl = 'http://localhost:8000/delete-blog-cover/' + id;
                try {
                    const response = await fetch(apiUrl);

                    // Check if the response is not successful
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }

                    const data = await response.json();

                    // Handle data
                    let imageContainer = document.querySelector('.image-container');
                    if (imageContainer) {
                        imageContainer.style.display = 'none';
                    }
                    console.log('data', data);
                } catch (error) {
                    // Handle error
                    console.error('Error:', error.message);
                }
            }

        </script>
        <script>
            var editor1 = new RichTextEditor("#inp_editor1", {
                
            });
        </script>
    @endsection
</x-Site.template>
