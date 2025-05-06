<!-- Blog Article -->
<div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
    <div class="grid lg:grid-cols-3 gap-y-8 lg:gap-y-0 lg:gap-x-6">
      <!-- Content -->
      <div class="lg:col-span-2">
        <div class="py-8 lg:pe-8">
          <div class="space-y-5 lg:space-y-8">
            <a class="inline-flex items-center gap-x-1.5 text-sm text-gray-600 decoration-2 hover:underline focus:outline-hidden focus:underline" href="#">
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
              Back to Blog
            </a>

            <h2 class="text-3xl font-bold lg:text-5xl">{{ $news->title }}</h2>

            <div class="flex items-center gap-x-5">
              <a class="inline-flex items-center gap-1.5 py-1 px-3 sm:py-2 sm:px-4 rounded-full text-xs sm:text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200" href="#">
                {{ $news->category ?? 'Uncategorized' }}
              </a>
              <p class="text-xs sm:text-sm text-gray-800">{{ $news->created_at->format('d M Y') }}</p>
            </div>

            <div class="mt-6">
              @if($news->image)
                  @php
                      $image = json_decode($news->image);
                  @endphp

                  @if(is_array($image) && count($image) > 0)
                      <img class="w-full object-cover rounded-xl" src="{{ $image[0] }}" alt="{{ $news->title }}">
                  @else
                      <img class="w-full object-cover rounded-xl" src="https://cdnuploads.aa.com.tr/uploads/Contents/2025/04/02/thumbs_b_c_37d45cdf92b25d4d153e882d6cbc9602.jpg?v=230229" alt="Blog Image">
                  @endif
              @else
                  <img class="w-full object-cover rounded-xl" src="https://i.tgrthaber.com/images/haberler/25-02/04/galatasarayda-gece-yarisi-transfer-operasyonu-imza-icin-istanbula-geldi-17386415288989.jpg" alt="Blog Image">
              @endif
            </div>

            <p class="text-lg text-gray-800">{!! nl2br(e($news->details)) !!}</p>

            <div class="text-center">
              <div class="grid lg:grid-cols-2 gap-3">
                <div class="grid grid-cols-2 lg:grid-cols-1 gap-3">
                  <figure class="relative w-full h-60">
                    <img class="size-full absolute top-0 start-0 object-cover rounded-xl" src="https://images.unsplash.com/photo-1670272505340-d906d8d77d03?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80" alt="Blog Image">
                  </figure>
                  <figure class="relative w-full h-60">
                    <img class="size-full absolute top-0 start-0 object-cover rounded-xl" src="https://images.unsplash.com/photo-1671726203638-83742a2721a1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80" alt="Blog Image">
                  </figure>
                </div>
                <figure class="relative w-full h-72 sm:h-96 lg:h-full">
                  <img class="size-full absolute top-0 start-0 object-cover rounded-xl" src="https://images.unsplash.com/photo-1671726203394-491c8b574a0a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80" alt="Blog Image">
                </figure>
              </div>
              <span class="mt-3 block text-sm text-center text-gray-500">
                Working process
              </span>
            </div>

            <p class="text-lg text-gray-800">As we've grown, we've seen how Preline has helped companies such as Spotify, Microsoft, Airbnb, Facebook, and Intercom bring their designers closer together to create amazing things. We've also learned that when the culture of sharing is brought in earlier, the better teams adapt and communicate with one another.</p>

            <p class="text-lg text-gray-800">That's why we are excited to share that we now have a <a class="text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium" href="#">free version of Preline</a>, which will allow individual designers, startups and other small teams a chance to create a culture of openness early on.</p>

            <blockquote class="text-center p-4 sm:px-7">
              <p class="text-xl font-medium text-gray-800 lg:text-2xl lg:leading-normal xl:text-2xl xl:leading-normal">
                To say that switching to Preline has been life-changing is an understatement. My business has tripled and I got my life back.
              </p>
              <p class="mt-5 text-gray-800">
                Nicole Grazioso
              </p>
            </blockquote>

            <figure>
              <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1671726203454-488ab18f7eda?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80" alt="Blog Image">
              <figcaption class="mt-3 text-sm text-center text-gray-500">
                A man and a woman looking at a cell phone.
              </figcaption>
            </figure>

            <div class="space-y-3">
              <h3 class="text-2xl font-semibold">Bringing the culture of sharing to everyone</h3>

              <p class="text-lg text-gray-800">We know the power of sharing is real, and we want to create an opportunity for everyone to try Preline and explore how transformative open communication can be. Now you can have a team of one or two designers and unlimited spectators (think PMs, management, marketing, etc.) share work and explore the design process earlier.</p>
            </div>

            <ul class="list-disc list-outside space-y-5 ps-5 text-lg text-gray-800">
              <li class="ps-2">Preline allows us to collaborate in real time and is a really great way for leadership on the team to stay up-to-date with what everybody is working on," <a class="text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium" href="#">said</a> Stewart Scott-Curran, Intercom's Director of Brand Design.</li>
              <li class="ps-2">Preline opened a new way of sharing. It's a persistent way for everyone to see and absorb each other's work," said David Scott, Creative Director at <a class="text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium" href="#">Eventbrite</a>.</li>
            </ul>

            <p class="text-lg text-gray-800">Small teams and individual designers need a space where they can watch the design process unfold, both for themselves and for the people they work with – no matter if it's a fellow designer, product manager, developer or client. Preline allows you to invite more people into the process, creating a central place for conversation around design. As those teams grow, transparency and collaboration becomes integrated in how they communicate and work together.</p>

            <div class="flex flex-col lg:flex-row lg:justify-between lg:items-center gap-y-5 lg:gap-y-0">
              <!-- Badges/Tags -->
              <div>
                <a class="m-0.5 inline-flex items-center gap-1.5 py-2 px-3 rounded-full text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200" href="#">
                  Plan
                </a>
                <a class="m-0.5 inline-flex items-center gap-1.5 py-2 px-3 rounded-full text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200" href="#">
                  Web development
                </a>
                <a class="m-0.5 inline-flex items-center gap-1.5 py-2 px-3 rounded-full text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200" href="#">
                  Business
                </a>
              </div>

              <!-- Share Section -->
              <div class="flex gap-3 items-center">
                <span class="text-sm text-gray-600">Share this article</span>
                <div class="flex gap-4">
                  <a href="#" class="text-gray-600 hover:text-blue-600 focus:text-blue-600">
                    <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 5v14m7-7H5"/></svg>
                  </a>
                  <a href="#" class="text-gray-600 hover:text-blue-600 focus:text-blue-600">
                    <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 12h18M12 3v18"/></svg>
                  </a>
                  <a href="#" class="text-gray-600 hover:text-blue-600 focus:text-blue-600">
                    <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 4v16l5-5h12V5l-5 5H3z"/></svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="space-y-8">
        <!-- Recent Posts Widget -->
        <div class="rounded-xl border border-gray-100 bg-gray-50 p-5">
          <h4 class="text-xl font-semibold">Recent Posts</h4>
          <ul class="mt-5 space-y-5">
            <li>
              <a class="flex items-center gap-3" href="#">
                <img class="w-16 h-16 object-cover rounded-lg" src="https://images.unsplash.com/photo-1670272505340-d906d8d77d03?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80" alt="Recent Post Image">
                <div>
                  <p class="text-lg font-medium text-gray-800">The Benefits of Remote Work</p>
                  <p class="text-sm text-gray-600">May 5, 2025</p>
                </div>
              </a>
            </li>
          </ul>
        </div>

        <!-- Categories Widget -->
        <div class="rounded-xl border border-gray-100 bg-gray-50 p-5">
          <h4 class="text-xl font-semibold">Categories</h4>
          <ul class="mt-5 space-y-3">
            <li><a class="text-gray-600 hover:text-blue-600" href="#">Technology</a></li>
            <li><a class="text-gray-600 hover:text-blue-600" href="#">Business</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
