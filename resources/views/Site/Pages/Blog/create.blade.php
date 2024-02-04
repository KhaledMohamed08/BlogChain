<x-Site.template>
    @section('styles')
    <style>
        .page-title{
            text-align: center;
            margin: 3rem;
        }
        #title{
            background-color: white;
            color:black;
            border: 1px solid #d5d5d5;
            border-radius: 7px;
        }
    </style>
    @endsection

    <div class="row">
        <div class="tap-full page-title">
            <h1>Create new Blog</h1>
        </div>
        <div class="tab-full">

            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="title">Blog title</label>
                    <input class="full-width" placeholder="Blog Title" type="text" id="title" name="title" value="{{ old('title') }}" >
                </div>
                <div>
                    <label for="content">Your Blog</label>
                    <textarea id="inp_editor1" name="content" class="full-width" placeholder="write your blog here..." ></textarea>
                </div>
                {{-- <div>
                    <label for="content">Your Blog</label>
                    <textarea class="full-width" placeholder="write your blog here..." id="content" name="content">{{ old('content') }}</textarea>
                </div> --}}
                <div>
                    <label for="image">Blog image</label>
                    <input type="file" id="image" name="image">
                </div>

                {{-- <label class="add-bottom">
                      <input type="checkbox">			            
                      <span class="label-text">Send a copy to yourself</span>
                   </label> --}}

                <input class="button-primary full-width-on-mobile full-width" type="submit" value="publish your blog">

            </form>

        </div>
    </div>

    @section('scripts')
    <script>
        var editor1 = new RichTextEditor("#inp_editor1", {
            editorResizeMode: "none",
            showPlusButton: false,
            showTagList	: false,
            enterKeyTag: "br",
        });
    </script>
    @endsection
</x-Site.template>
