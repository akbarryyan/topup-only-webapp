@extends('layouts.app')

@section('content')
<!-- Main Content -->
        <main class="px-4 mt-8">
            <div class="max-w-7xl mx-auto">
                <!-- Promotional Banner -->
                <img src="{{ asset('assets/images/banner.jpg') }}" alt="banner.png" class="rounded-xl" />
            </div>

            <!-- Best Seller Section -->
            <div class="mt-4">
                <div class="flex items-center space-x-1">
                    <h1 class="text-[20px]">BEST SELLER</h1>
                    <svg
                        class="h-5"
                        viewBox="-3 0 32 32"
                        version="1.1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"
                        fill="#000000"
                    >
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g
                            id="SVGRepo_tracerCarrier"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></g>
                        <g id="SVGRepo_iconCarrier">
                            <title>fire-2</title>
                            <desc>Created with Sketch Beta.</desc>
                            <defs></defs>
                            <g
                                id="Page-1"
                                stroke="none"
                                stroke-width="1"
                                fill="none"
                                fill-rule="evenodd"
                                sketch:type="MSPage"
                            >
                                <g
                                    id="Icon-Set"
                                    sketch:type="MSLayerGroup"
                                    transform="translate(-415.000000, -411.000000)"
                                    fill="#ff3a30"
                                >
                                    <path
                                        d="M428.5,441 C422.148,441 417,435.641 417,429.625 C417,428.228 417.031,427.094 418,426 C417.895,426.634 419.397,432.055 424.305,431.771 C424.092,427.652 422.978,417.561 428.152,414.073 C427.695,419.557 429.038,426.924 435.029,428 C434.686,425.801 434.727,422.143 436.267,421.467 C436.433,424.836 438.924,426.914 438.924,430.152 C438.924,436.016 433.251,441 428.5,441 L428.5,441 Z M437.905,417.953 C433.52,419.203 432.717,422.748 433,425 C429.872,421.322 430,417.093 430,411 C419.968,414.783 422.301,425.688 422,429 C419.477,426.935 419,422 419,422 C416.336,423.371 415,427.031 415,430 C415,437.18 420.82,443 428,443 C435.18,443 441,437.18 441,430 C441,425.733 437.867,423.765 437.905,417.953 L437.905,417.953 Z"
                                        id="fire-2"
                                        sketch:type="MSShapeGroup"
                                    ></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <!-- Product Best Seller -->
            </div>

            <!-- Specialist MLBB -->
            <div class="mt-4">
                <h1 class="uppercase">Specialist MLBB</h1>
                <div class="mt-2 grid grid-cols-3 gap-3">
                    <div>
                        <img
                            src="{{ asset('assets/images/ml.jpg') }}"
                            alt="gambar-product"
                            class="h-[185px] w-full rounded-lg"
                        />
                    </div>
                    <div>
                        <img
                            src="{{ asset('assets/images/ml.jpg') }}"
                            alt="gambar-product"
                            class="h-[185px] w-full rounded-lg"
                        />
                    </div>
                    <div>
                        <img
                            src="{{ asset('assets/images/ml.jpg') }}"
                            alt="gambar-product"
                            class="h-[185px] w-full rounded-lg"
                        />
                    </div>
                </div>
            </div>

            <!-- All Product -->
            <div class="mt-4">
                <h1 class="text-[20px]">Game</h1>
                <div class="mt-2 grid grid-cols-3 gap-3">
                    <div>
                        <img
                            src="{{ asset('assets/images/roblox.jpg') }}"
                            alt="gambar-product"
                            class="h-[185px] rounded-lg"
                        />
                    </div>
                    <div>
                        <img
                            src="{{ asset('assets/images/roblox.jpg') }}"
                            alt="gambar-product"
                            class="h-[185px] rounded-lg"
                        />
                    </div>
                    <div>
                        <img
                            src="{{ asset('assets/images/roblox.jpg') }}"
                            alt="gambar-product"
                            class="h-[185px] rounded-lg"
                        />
                    </div>
                </div>
            </div>

            <!-- Product Voucher -->
            <div class="mt-4">
                <h1>Voucher</h1>
                <div class="mt-2 grid grid-cols-3 gap-3">
                    <div>
                        <img
                            src="{{ asset('assets/images/steam.jpg') }}"
                            alt="gambar-product"
                            class="rounded-lg"
                        />
                    </div>
                    <div>
                        <img
                            src="{{ asset('assets/images/steam.jpg') }}"
                            alt="gambar-product"
                            class="rounded-lg"
                        />
                    </div>
                    <div>
                        <img
                            src="{{ asset('assets/images/steam.jpg') }}"
                            alt="gambar-product"
                            class="rounded-lg"
                        />
                    </div>
                </div>
            </div>
        </main>
@endsection