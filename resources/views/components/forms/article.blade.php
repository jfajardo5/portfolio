<form method="post" action="{{ route('new-article') }}">
    @csrf
    <div class="flex flex-col w-full max-w-full p-2">
        <label for="title" class="text-xl p-1">Title</label>
        <input id="title" type="text" name="title" class="font-bold mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Write a catchy title." required>
        @if ($errors->has('title'))
            <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">{{ $errors->first('title') }}</span>
        @endif
    </div>
    <div class="flex flex-col w-full max-w-full p-2">
        <label for="body" class="text-xl p-1">Content</label>
        <textarea id="body" name="body" rows="20" placeholder="Hello, world!"></textarea>
        @if ($errors->has('body'))
            <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">{{ $errors->first('body') }}</span>
        @endif
    </div>
    {{ $slot }}
</form>
<script src="https://cdn.tiny.cloud/1/{{ env('TINY_MCE_API_KEY', 'no-api-key') }}/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#body',
        plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable textpattern preview',
        toolbar: 'a11ycheck addcomment casechange checklist code formatpainter pageembed permanentpen table preview',
        toolbar_mode: 'floating',
    });
</script>