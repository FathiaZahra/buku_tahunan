@extends('layout.index')
@section('content')


    <div style='margin-left:70px; margin-top:40px;'>
        <span class="h1">VISI</span>
    </div>

    <div style='margin-left:70px; margin-top:15px;'>
        <span class="h6 text-white">SMK NEGERI 1 KOTA BEKASI</span>
    </div>

    <div class="card" style='margin-left:70px; margin-top:15px; width:1000px;'>
        <div class="card-body text-center h5">
            “MENJADI  SMK  YANG MENGHASILKAN SDM KOMPETEN, BERKARAKTER,  DAN IHSAN”
        </div>
    </div>

    <div style='margin-left:70px; margin-top:50px;'>
        <span class="h1">MISI</span>
    </div>

    <div class="card" style='margin-left:70px; margin-top:15px; width:1000px;'>
        <div class="card-body h5">
            1. Melaksanakan Sistem Manajemen Mutu ISO 9001 : 2015 <br><br>
            2. Membudayakan pengamalan nilai-nilai agama dalam setiap aspek kehidupan seluruh warga sekolah. <br><br>
            3. Menyelenggarakan pendidikan formal kejuruan untuk menghasilkan lulusan yang berkarakter, 
            cerdas, inovatif , kreatif, sesuai dengan tuntutan dunia industri dan mampu berwirausaha. <br><br>
            4. Meningkatkan kualitas tenaga pendidik dan kependidikan sesuai kualifikasi dan kompetensi standar. <br><br>
            5. Menyelenggarakan Lembaga Sertifikasi Profesi dan  Tempat Uji Kompetensi   sesuai dengan bidang kompetensi. <br><br>
            6. Menyelenggarakan  sekolah Berbudaya lingkungan. <br><br>
            7. Menjadi pusat layanan data dan informasi pembelajaran berbasis IT. <br><br>
            8. Menjadi pusat layanan Bursa Kerja Khusus Kota Bekasi. <br><br>
            9. Menjadi SMK Rujukan.
        </div>
    </div>


    <div style='margin-left:70px; margin-top:100px; width:1000px;'>
        <div>

        <div 
            style="
            display: flex;
            ">   
            <div
                style="
                        background-image: url('{{ asset('gambar/kpl_sekolah.jpg')}}');
                        background-repeat: no-repeat;
                        height:550px;
                        width: 500px;
                        padding: 12ppx;
                        display: flex;
                        justify-content: center;
                        ">
                        <img src=" {{ asset('gambar/kpl_sekolah')}}" alt="" class="w-20 h-20">
                        <br>          
        </div>
        <div>
        <div style='margin-left:70px; margin-top:50px;'>
            <span class="h6 text-white relative margin-top:20px;">SMK NEGERI 1 KOTA BEKASI</span>
        </div>
        <div style='margin-left:70px; margin-top:30px;'>
            <h1>SAMBUTAN</h1> <br>
            <h1>KEPALA</h1> <br>
            <h1>SEKOLAH</h1> <br>
        </div>
        <div style='margin-left:70px; margin-top:30px;'>
            <span class="h6 text-white relative margin-top:20px;">Drs.Lee Soo Man, S.M</span>
        </div>   
    </div>
    </div> 
    <div class="card" style='margin-left:1px; margin-top:15px; width:1000px;'>
        <div class="card-body h5">
            Assalamualaikum wrwb. Hamdan wa syukron lillah, ama ba’du. <br>
            Segala puji bagi dzat yang telah melimpahkan rahmat kepada kita semua, shalawat dan salam tetap 
            tercurah kepada baginda Nabi Muhammad SAW, yang telah membimbing dan menunjukkan kita jalan kebenaran
            yakni addinul Islam. Dan Semoga kita kelak mendapatkan syafaatnya, Aamiin. <br>
            Saya hanya bisa mendoakan, semoga selepas dari kelulusan Ananda Jeno Lee dari SMK NEO CULTURE, 
            Ananda semakin saleh, semakin cerdas, dan siap memimpin. Dijalur apapun dan dibidang apapun semoga 
            diberikan kesuksesan dan mendapat ridho dari Allah SWT. Aamiin. <br>
            Selamat menghadapi dunia nyata, dunia yang penuh ujian dan tantangan. Semoga engkau mampu
             melewatinya dengan baik.Wassalamulalaikum wr wb.
        </div>
    </div>

    <div style='margin-left:1px; margin-top:100px; width:1000px;'>
        <div>
    <div 
    style="
    display: flex;
    ">   
    <div
        style="
                background-image: url('{{ asset('gambar/kesiswaan.jpg')}}');
                background-repeat: no-repeat;
                height:550px;
                width: 500px;
                padding: 12ppx;
                display: flex;
                justify-content: center;
                ">
                <img src=" {{ asset('gambar/kesiswaan')}}" alt="" class="w-20 h-20">
                <br>          
</div>
<div>
    <div style='margin-left:70px; margin-top:50px;'>
        <span class="h6 text-white relative margin-top:20px;">SMK NEGERI 1 KOTA BEKASI</span>
    </div>
    <div style='margin-left:70px; margin-top:30px;'>
        <h1>SAMBUTAN</h1><br>
        <h1>KESISWAAN</h1><br>
    </div>
    <div style='margin-left:70px; margin-top:30px;'>
        <span class="h6 text-white relative margin-top:20px;">Dr. Yang Hyun Suk, Y.G</span>
    </div>   
</div>
</div> 
<div class="card" style='margin-left:1px; margin-top:15px; width:1000px;'>
    <div class="card-body h5">
        Assalamualaikum wrwb. Hamdan wa syukron lillah, ama ba’du. <br>
        Segala puji bagi dzat yang telah melimpahkan rahmat kepada kita semua, shalawat dan salam tetap 
        tercurah kepada baginda Nabi Muhammad SAW, yang telah membimbing dan menunjukkan kita jalan kebenaran
        yakni addinul Islam. Dan Semoga kita kelak mendapatkan syafaatnya, Aamiin. <br>
        Saya hanya bisa mendoakan, semoga selepas dari kelulusan Ananda Jeno Lee dari SMK NEO CULTURE, 
        Ananda semakin saleh, semakin cerdas, dan siap memimpin. Dijalur apapun dan dibidang apapun semoga 
        diberikan kesuksesan dan mendapat ridho dari Allah SWT. Aamiin. <br>
        Selamat menghadapi dunia nyata, dunia yang penuh ujian dan tantangan. Semoga engkau mampu
         melewatinya dengan baik.Wassalamulalaikum wr wb.
    </div>
</div>
<div style='margin-left:1px; margin-top:100px; width:1000px;'>
    <div>
<div 
style="
display: flex;
">   
<div
    style="
            background-image: url('{{ asset('gambar/ketua_bts.jpg')}}');
            background-repeat: no-repeat;
            height:550px;
            width: 500px;
            padding: 12ppx;
            display: flex;
            justify-content: center;
            ">
            <img src=" {{ asset('gambar/ketua_bts')}}" alt="" class="w-20 h-20">
            <br>          
</div>

<div>
    <div style='margin-left:70px; margin-top:50px;'>
        <span class="h6 text-white relative margin-top:20px;">SMK NEGERI 1 KOTA BEKASI</span>
    </div>
    <div style='margin-left:70px; margin-top:30px;'>
        <h1>SAMBUTAN</h1><br>
        <h1>KETUA</h1><br>
        <h1>BTS</h1><br>
    </div>
    <div style='margin-left:70px; margin-top:30px;'>
        <span class="h6 text-white relative margin-top:20px;">CHOI SIWON</span>
    </div>   
</div>
</div> 
<div class="card" style='margin-left:1px; margin-top:15px; width:1000px;'>
    <div class="card-body h5">
        Assalamualaikum wrwb. Hamdan wa syukron lillah, ama ba’du. <br>
        Segala puji bagi dzat yang telah melimpahkan rahmat kepada kita semua, shalawat dan salam tetap 
        tercurah kepada baginda Nabi Muhammad SAW, yang telah membimbing dan menunjukkan kita jalan kebenaran
        yakni addinul Islam. Dan Semoga kita kelak mendapatkan syafaatnya, Aamiin. <br>
        Saya hanya bisa mendoakan, semoga selepas dari kelulusan Ananda Jeno Lee dari SMK NEO CULTURE, 
        Ananda semakin saleh, semakin cerdas, dan siap memimpin. Dijalur apapun dan dibidang apapun semoga 
        diberikan kesuksesan dan mendapat ridho dari Allah SWT. Aamiin. <br>
        Selamat menghadapi dunia nyata, dunia yang penuh ujian dan tantangan. Semoga engkau mampu
         melewatinya dengan baik.Wassalamulalaikum wr wb.
    </div>
</div>

<div style='margin-left:1px; margin-top:100px; width:1000px;'>
    <div>
<div 
style="
display: flex;
">   
<div
    style="
            background-image: url('{{ asset('gambar/ketua_osis.jpg')}}');
            background-repeat: no-repeat;
            height:550px;
            width: 500px;
            padding: 12ppx;
            display: flex;
            justify-content: center;
            ">
            <img src=" {{ asset('gambar/kpl_sekolah')}}" alt="" class="w-20 h-20">
            <br>          
</div>
<div>
    <div style='margin-left:70px; margin-top:50px;'>
        <span class="h6 text-white relative margin-top:20px;">SMK NEGERI 1 KOTA BEKASI</span>
    </div>
    <div style='margin-left:70px; margin-top:30px;'>
        <h1>SAMBUTAN</h1><br>
        <h1>KETUA</h1><br>
        <h1>OSIS</h1><br>
    </div>
    <div style='margin-left:70px; margin-top:30px;'>
        <span class="h6 text-white relative margin-top:20px;">KWON JI YONG</span>
    </div>   
</div>
</div> 
<div class="card" style='margin-left:1px; margin-top:15px; width:1000px;'>
    <div class="card-body h5">
        Assalamualaikum wrwb. Hamdan wa syukron lillah, ama ba’du. <br>
        Segala puji bagi dzat yang telah melimpahkan rahmat kepada kita semua, shalawat dan salam tetap 
        tercurah kepada baginda Nabi Muhammad SAW, yang telah membimbing dan menunjukkan kita jalan kebenaran
        yakni addinul Islam. Dan Semoga kita kelak mendapatkan syafaatnya, Aamiin. <br>
        Saya hanya bisa mendoakan, semoga selepas dari kelulusan Ananda Jeno Lee dari SMK NEO CULTURE, 
        Ananda semakin saleh, semakin cerdas, dan siap memimpin. Dijalur apapun dan dibidang apapun semoga 
        diberikan kesuksesan dan mendapat ridho dari Allah SWT. Aamiin. <br>
        Selamat menghadapi dunia nyata, dunia yang penuh ujian dan tantangan. Semoga engkau mampu
         melewatinya dengan baik.Wassalamulalaikum wr wb.
    </div>
</div>





@endsection