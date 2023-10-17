@props(['listing'])
<tr class="border-gray-300">
    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg text-center"> 
        <a href="{{$listing->link}}">
           {{$listing->title}}
        </a>
    </td>

    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg text-center"> 
        <p>{{$listing->chapter}}</p>
    </td>
    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg text-center"> 
        <p>{{$listing->genre}}</p>
    </td>
    <td class="border-t border-b border-gray-300 text-lg text-center"> 
        <div class="flex items-center justify-center space-x-2">
        <a href="/listings/edit/{{$listing->id}}" class="text-blue-400 px-6 py-2 rounded-xl">
            <i class="fa-solid fa-pen-to-square"></i> 
        </a>
        <form method="POST" action="{{ route('listings.destroy', $listing->id) }}">
                        @csrf
            @method('DELETE')
            <button class="text-red-600 deleteListing" data-listing-id="{{$listing->id}}">
                <i class="fa-solid fa-trash-can"></i> 
            </button>
        </form>
        </div>
    </td>
</tr>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.deleteListing');

        deleteButtons.forEach(function (deleteButton) {
            deleteButton.addEventListener('click', function (event) {
                event.preventDefault(); // Prevent the default link behavior

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'error',
                    showCancelButton: true,
                    confirmButtonColor: '#16A34A',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, I want to delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If confirmed, submit the form associated with this button
                        const form = event.target.closest('form');
                        if (form) {
                            form.submit();
                        }
                    }
                });
            });
        });
    });
</script>







