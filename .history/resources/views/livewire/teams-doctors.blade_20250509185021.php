<!-- Team Section -->
<div class="max-w-[85rem] px-4 py-16 sm:px-6 lg:px-8 lg:py-20 mx-auto bg-white">
    <!-- Title -->
    <div class="max-w-2xl mx-auto text-center mb-16">
      <h2 class="text-3xl font-bold text-gray-800 md:text-4xl md:leading-tight">Uzman Ekibimiz</h2>
      <p class="mt-3 text-lg text-gray-600">Sağlığınız için en iyisini sunan doktor kadromuz</p>
    </div>
    <!-- End Title -->

    <!-- Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        @if (count($doctors) > 0)
        @foreach ($doctors as $item)
            <!-- Card -->
            <div class="group flex flex-col h-full rounded-xl bg-white border border-gray-100 shadow-sm hover:shadow-lg transition-all overflow-hidden">
              <div class="relative pt-[70%] overflow-hidden">
                <img class="absolute top-0 left-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out" src="{{$item->photo_url ?? 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&h=500&q=80'}}" alt="Doctor Image">
                <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-black/10 to-transparent"></div>
                <div class="absolute bottom-4 left-4">
                  <h3 class="text-xl font-semibold text-white">
                    DGN. {{$item->doctorUser->name}}
                  </h3>
                  <p class="text-sm text-white/90">
                    {{$item->speciality->speciality_name}}
                  </p>
                </div>
              </div>

              <div class="p-6">
                <div class="flex items-center mb-4">
                  <svg class="flex-shrink-0 size-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
                    <circle cx="12" cy="7" r="4"/>
                  </svg>
                  <span class="ml-2 text-sm text-gray-600">{{$item->hospital_name}}</span>
                </div>

                <p class="text-gray-600 line-clamp-3 mb-5">
                  {{$item->bio}}
                </p>

                <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                  <!-- Social Icons -->
                  <div class="flex space-x-2">
                    @if($item->twitter)
                    <a href="{{$item->twitter}}" target="_blank" class="inline-flex justify-center items-center size-8 rounded-full bg-gray-50 text-gray-500 hover:bg-blue-50 hover:text-blue-500 transition-colors">
                      <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M5.026
