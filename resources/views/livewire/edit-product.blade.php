<div class="max-w-md mx-auto">
    <form wire:submit.prevent="update" class="bg-white shadow-sm rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
            <label for="productName" class="block text-gray-700 font-bold mb-2">Product Name:</label>
            <input type="text" name="productName" id="productName" wire:model="productName" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('productName') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="productCategory" class="block text-gray-700 font-bold mb-2">Product Category:</label>
            <select id="productCategory" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="productCategory"wire:model="productCategory" required autocomplete="productCategory">
                        <option value="">Choose a category</option>
                        <option value="ELECTRONIC" {{ old('productCategory') == 'ELECTRONIC' ? 'selected' : '' }}>ELECTRONIC</option>
                        <option value="BOOK" {{ old('productCategory') == 'BOOK' ? 'selected' : '' }}>BOOK</option>
                        <option value="FURNITURE" {{ old('productCategory') == 'FURNITURE' ? 'selected' : '' }}>FURNITURE</option>
                    </select>
            @error('productCategory') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
            <textarea name="description" id="description" wire:model="description" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="image_path" class="block text-gray-700 font-bold mb-2">Image:</label>
            <input type="file" name="image_path" id="image_path" wire:model="image_path" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('image_path') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Update
            </button>
        </div>
    </form>
</div>