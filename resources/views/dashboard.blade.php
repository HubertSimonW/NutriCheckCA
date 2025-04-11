
<div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
    <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
        <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
            <h1 class="mb-1 font-medium">Welcome to your Dashboard!</h1>
            <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">
                Here's where you can view and manage your products, nutrition info, and suggestions.
            </p>
            <ul class="flex flex-col gap-2 mt-4 text-sm">
                <li><a href="{{ route('products.index') }}" class="text-[#f53003] dark:text-[#FF4433] underline">View All Products</a></li>
                <li><a href="{{ route('products.create') }}" class="text-[#f53003] dark:text-[#FF4433] underline">Add New Product</a></li>
                {{-- Add more dashboard links here --}}
            </ul>
        </div>
        <div class="bg-[#fff2f2] dark:bg-[#1D0002] relative lg:-ml-px -mb-px lg:mb-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg aspect-[335/376] lg:aspect-auto w-full lg:w-[438px] shrink-0 overflow-hidden">
            {{-- Laravel Logo or Image --}}
            <x-application-logo class="w-full h-full" />
        </div>
    </main>
</div>
