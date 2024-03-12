<div class="px-4 md:px-10 py-4 md:py-7">
    <div class="flex items-center justify-between">
        <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">Event</p>
    
    </div>
</div>
 <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
  <div class="sm:flex items-center justify-between">
    <div class="flex items-center"></div>
    <a  href="{{ route('event.create') }}" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
        <p class="text-sm font-medium leading-none text-white">Add Event</p>
    </a>
</div> 

    @if (session()->has('success'))
    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
        <p class="font-bold">Success!</p>
        <p>{{ session()->get('success') }}</p>
    </div>

    @endif
    <div class="mt-7 overflow-x-auto">
        <table class="w-full whitespace-nowrap">
            <thead>
                <tr>
                    <td>image</td>
                    <td>id</td>
                    <td>title</td>
                    <td>description</td>
                    <td>categorie_id</td>                                   
                    <td>user_id</td>
                    <td>lieu</td>
                    <td>date</td>
                    <td>nbPlace</td>
                    <td>action</td>
                    <td>action</td>
                </tr>
            </thead>
            <tbody>
                 @foreach ($events as $event )
              
    
                <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                    <td>
                      {{ $event->image }}
                    </td>
                    <td>
                      {{ $event->id }}
                    </td>
                    <td>
                      {{ $event->titre}}
                    </td>
                    <td>
                      {{ $event->description}}
                    </td>
                    <td>
                      {{ $event->categorie_id }}
                    </td>
                    <td>
                      {{ $event->user_id}}
                    </td>
                    <td>
                      {{ $event->lieu }}
                    </td>
                    <td>
                      {{ $event->date }}
                    </td>
                    <td>
                      {{ $event->nbPlace }}
                    </td>
                     

                    <td>
                      <form action="{{ route('event.destroy',$event) }}" method="post" >
                       @method('delete')
                       @csrf
                          <button class="bg-red-500 text-white rounded p-3">supprimer</button>
                      </form>
                   </td>

                   <td>
                    <form action="{{ route('event.edit',$event) }}"  >
                     @csrf
                        <button class="bg-blue-500 text-white rounded p-3">modifier</button>
                    </form>
                 </td> 
                  
                  </tr>
                  
                @endforeach 
          </tbody>
        </table>

    </div>
</div>
</body>
</html>       
