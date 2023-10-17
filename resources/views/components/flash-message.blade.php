@if(session()->has('message'))

    {{-- <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"  class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-yellow-600 text-white px-48 py-2">
        <p>
            {{session('message')}}
        </p>
    </div> --}}

    <script>

        Swal.fire({
            icon: 'success',
            title: '{{session('message')}}',
            showConfirmButton: false,
            timer: 2500
          })
        
          </script>
        
        
@endif



