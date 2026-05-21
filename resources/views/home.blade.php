@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<div class="font-sans antialiased text-gray-900 overflow-x-hidden">

    {{-- Hero Section --}}
    <div class="relative h-[500px] md:h-[600px] flex items-center justify-center text-center text-white overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/foto bersama.jpg') }}" alt="FMI FMIPA UNNES" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-gray-50 via-transparent to-transparent"></div>
    </div>
    
    <div class="relative z-10 max-w-5xl px-8" x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)">
        <h2 class="text-xl md:text-2xl font-medium mb-2 tracking-wide transform transition-all duration-1000 ease-out" 
            :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
            Selamat Datang di
        </h2>
        
        <h1 class="text-4xl md:text-6xl font-extrabold mb-4 leading-tight transform transition-all duration-1000 delay-500 ease-out" 
            :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
            Forum Mahasiswa Islam
        </h1>
        
        <p class="text-lg md:text-2xl font-semibold opacity-90 transform transition-all duration-1000 delay-1000 ease-out" 
           :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
            Fakultas Matematika dan Ilmu Pengetahuan Alam <br>
            Universitas Negeri Semarang
        </p>
    </div>
</div>

    {{-- Section Layanan & Informasi --}}
    <div class="bg-gray-50 py-16">
        <div class="max-w-6xl mx-auto px-4">
            {{-- Menggunakan flex agar kotak bisa berkumpul di tengah dengan jarak (gap) yang pas --}}
            <div class="flex flex-wrap justify-center gap-8 items-stretch">
                @foreach($semua_link as $item)
                    <div class="group bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col w-full sm:w-[calc(50%-1.5rem)] md:w-[320px]">
                        
                        <div class="flex-grow">
                            <h3 class="text-xl font-bold text-gray-800 leading-tight mb-4 tracking-tight">
                                {!! nl2br(e($item->judul)) !!}
                            </h3>
                            <p class="text-gray-500 text-[14px] leading-relaxed mb-6 font-normal">
                                {{ $item->keterangan }}
                            </p>
                        </div>

                        <div class="mt-auto">
                            <div class="w-full h-[1px] bg-blue-100 group-hover:bg-blue-400 transition-colors duration-500 mb-5"></div>
                            
                            <a href="{{ $item->url }}" target="_blank" rel="noopener noreferrer" class="flex items-center justify-between group-hover:text-blue-600 transition-colors">
                                <span class="font-bold text-gray-800 group-hover:text-blue-600 text-[15px]">
                                    {{ $item->tulisan_tombol ?? 'Isi Formulir' }}
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-6 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Section Apasih FMI Itu? --}}
    <section class="bg-white py-12 md:py-24">
        {{-- Menyesuaikan padding: px-8 (HP), sm:px-16 (Tablet), lg:px-6 (Desktop) --}}
        <div class="max-w-6xl mx-auto px-8 sm:px-16 lg:px-6">
            {{-- Di tablet (sebelum md), kita tetap pakai flex-col agar tidak sesak samping --}}
            <div class="flex flex-col lg:flex-row items-center gap-4 lg:gap-16">
                
                {{-- Kolom Teks --}}
                <div class="w-full lg:w-3/5 text-center lg:text-left">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6 md:mb-8 tracking-tight">
                        Apasih FMI Itu?
                    </h2>
                    {{-- Menambahkan sm:max-w-2xl sm:mx-auto agar di tablet teks tidak melar --}}
                    <p class="text-gray-600 text-sm md:text-[19px] leading-relaxed md:leading-[1.8] mb-8 md:mb-10 text-justify lg:text-left font-normal opacity-90 sm:max-w-2xl sm:mx-auto lg:max-w-none">
                        Forum Mahasiswa Islam (FMI) Fakultas Matematika dan Ilmu Pengetahuan Alam Universitas Negeri Semarang merupakan lembaga kemahasiswaan tingkat fakultas yang menjadi salah satu lembaga dakwah kampus sebagai tempat meningkatkan ruhiyah bagi seluruh mahasiswa FMIPA UNNES.
                    </p>
                    <a href="{{ route('about') }}" class="inline-flex items-center px-8 md:px-10 py-2.5 md:py-3.5 bg-[#9db2ce] hover:bg-[#7aa2d1] text-white font-bold rounded-xl transition-all duration-300 shadow-sm hover:shadow-lg group text-xs md:text-sm tracking-wide">
                        Selengkapnya
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-3 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                {{-- Kolom Logo --}}
                <div class="w-full lg:w-2/5 flex justify-center mt-8 lg:mt-0">
                    <div class="relative">
                        {{-- Glow effect yang lebih soft --}}
                        <div class="absolute -inset-8 bg-blue-50/80 rounded-full blur-3xl -z-10"></div>
                        {{-- Logo disesuaikan: 200px (HP), 280px (Tablet), 340px (Desktop) --}}
                        <img src="{{ asset('images/Logo FMI hitam.png') }}" 
                            alt="Logo FMI FMIPA UNNES" 
                            class="w-full max-w-[200px] sm:max-w-[280px] lg:max-w-[340px] h-auto drop-shadow-2xl">
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- SECTION DEPARTMENT --}}
    <section class="bg-gray-50 py-8 md:py-16 border-t border-gray-100 font-['Poppins']">
        <div class="max-w-7xl mx-auto px-4 md:px-6">
            {{-- Header Section --}}
            <div class="text-center mb-8 md:mb-10">
                <h2 class="text-xl md:text-3xl font-bold text-gray-800 tracking-normal uppercase">
                    Departemen
                </h2>
            </div>

            {{-- Grid Fleksibel: Otomatis menyesuaikan layar --}}
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-8 lg:gap-10">
                @foreach($departments as $dept)
                <div class="group relative flex flex-col bg-white rounded-[1.5rem] md:rounded-[2.5rem] shadow-xl border border-gray-100 overflow-hidden hover:shadow-[0_20px_60px_rgba(0,0,0,0.08)] hover:-translate-y-2 transition-all duration-500">
                    
                    {{-- Container Foto --}}
                    <div class="relative w-full aspect-[4/3] overflow-hidden p-2 md:p-4 pb-0">
                        <img src="{{ asset('storage/' . $dept->image) }}" 
                             alt="{{ $dept->name }}" 
                             class="w-full h-full object-cover rounded-[1rem] md:rounded-[1.8rem] transition-transform duration-1000 group-hover:scale-110">
                        
                        {{-- Overlay --}}
                       <div class="absolute inset-2 md:inset-4 bg-transparent group-hover:bg-transparent transition-opacity duration-500 rounded-[1rem] md:rounded-[1.8rem]"></div>
                    </div>
                    
                    {{-- Detail Teks --}}
                    <div class="p-4 md:p-6 lg:p-8 pt-3 md:pt-5 flex flex-col items-center justify-center">
                        <span class="text-blue-600 text-[10px] md:text-[12px] lg:text-[15px] font-[750] tracking-widest uppercase mb-1 opacity-50">
                            Departemen
                        </span>
                        <h3 class="text-[11px] sm:text-[13px] md:text-[15px] lg:text-[17px] font-bold text-slate-800 tracking-wide text-center uppercase leading-tight">
                            {{ $dept->name }}
                        </h3>
                        
                        {{-- Garis Aksen (Hanya muncul di layar agak besar) --}}
                        <div class="hidden sm:block mt-3 md:mt-5 transform translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                            <div class="w-6 md:w-8 h-1 bg-blue-600 rounded-full mx-auto"></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection