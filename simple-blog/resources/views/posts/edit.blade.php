<div class="max-w-md mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
  <h2 class="text-2xl font-semibold mb-4">Edit Post</h2>
  
  <form action="/posts/1" method="POST" class="space-y-4">
    <!-- CSRF Token -->
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    <input type="hidden" name="_method" value="PUT">

    <!-- Title -->
    <div>
      <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
      <input 
        type="text" 
        id="title" 
        name="title" 
        value="My First Post" 
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
      >
    </div>

    <!-- Body -->
    <div>
      <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
      <textarea 
        id="body" 
        name="body" 
        rows="4" 
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">This is the content of my first post.</textarea>
    </div>

    <!-- Submit -->
    <button 
      type="submit" 
      class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:ring focus:ring-blue-300">
      Update Post
    </button>
  </form>
</div>
