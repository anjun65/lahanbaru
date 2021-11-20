@extends('layouts.pdf')


@section('title')
    Rekap Permintaan
@endsection


{{-- @push('addon-style')
    <link href="http://lahanv1.test/style/main.css" rel="stylesheet" type="text/css"/>
@endpush --}}


@section('content')

<div class="page-content page-home">
    <div class="container">
        <div class="row">
            <table class="table table-bordered" style="">
                <tbody>
                    <tr>
                        <td width="10%" style="border-top: hidden;border-left:hidden;border-right:hidden;"></td>
                        <td width="10%" style="border-top: hidden;border-left:hidden;border-right:hidden;"></td>
                        <td width="10%" style="border-top: hidden;border-left:hidden;border-right:hidden;"></td>
                        <td width="10%" style="border-top: hidden;border-left:hidden;border-right:hidden;"></td>
                        <td width="10%" style="border-top: hidden;border-left:hidden;border-right:hidden;"></td>
                        <td width="10%" style="border-top: hidden;border-left:hidden;border-right:hidden;"></td>
                        <td width="10%" style="border-top: hidden;border-left:hidden;border-right:hidden;"></td>
                        <td width="10%" style="border-top: hidden;border-left:hidden;border-right:hidden;"></td>
                        <td width="10%" style="border-top: hidden;border-left:hidden;border-right:hidden;"></td>
                        <td width="10%" style="border-top: hidden;border-left:hidden;border-left:hidden;border-right-color: white;"></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td colspan="2" class="text-center align-middle">
                            <img src="{{ asset('images/logo-pdf.png') }}" class="card-img-top w-100">
                        </td>
                        <td colspan="8" class="text-center">
                            <p><h3>PERMINTAAN SARANA PENELITIAN</h3></p>
                            <p class="m-0">Nomor : {{ $item->nomor }}/LI.00.01/79/FM/2021</p>
                            <p class="m-0">Tanggal : {{ $item->tanggal }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" height="10px" style="padding-bottom:0px;border-bottom: hidden;border-right:hidden;">
                            Judul Kegiatan
                        </td>
                        <td colspan="8" style="padding-bottom:0px;border-bottom: hidden;">
                            : {{ $item->judul }}<br>
                               {{-- Waktu Pelaksanaan &emsp;: {{ $item->awal_pelaksanaan }}-{{ $item->akhir_pelaksanaan }}<br>
                               Blok&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: {{ $item->blok_details }}<br>
                               Varietas&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: {{ $item->varietas }}<br>
                               Peneliti&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: {{ $item->user->name }}
                            </:> --}}
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" height="10px" style="font-size: 15px;padding-top:0px;padding-bottom:0px;border-bottom: hidden;border-right:hidden;">
                            Waktu Pelaksanaan
                        </td>
                        <td colspan="8" style="padding-top:0px;padding-bottom:0px;border-bottom: hidden;">
                            : {{ $item->awal_pelaksanaan }}-{{ $item->akhir_pelaksanaan }}
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" style="padding-top:0px;padding-bottom:0px;border-bottom: hidden;border-right:hidden;">
                            Blok
                        </td>
                        <td colspan="8" style="padding-top:0px;padding-bottom:0px;border-bottom: hidden;">
                            : {{ $item->blok }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding-top:0px;padding-bottom:0px;border-bottom: hidden;border-right:hidden;">
                            Varietas
                        </td>
                        <td colspan="8" style="padding-top:0px;padding-bottom:0px;border-bottom: hidden;">
                            : {{ $item->varietas }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding-top:0px;border-right:hidden;">
                            Peneliti
                        </td>
                        <td colspan="8" style="padding-top:0px;padding-bottom:0px;">
                            : {{ $item->user->name }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="10">
                            <b>A. TUJUAN</b>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="10">
                            {{ $item->tujuan }}
                        </td>
                    </tr>

                    <tr>
                        <td colspan="10">
                            <b>B. PERLAKUAN</b>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="10">
                            {{ $item->rancangan }}
                        </td>
                    </tr>

                    <tr>
                        <td colspan="10">
                            <b>C. KEBUTUHAN SARANA</b>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <p class="m-1" style="padding-left:5px;">A. Areal</p>
                            @if ($item->areal == "Lahan sawah/lahan basah")
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Lahan sawah , luas {{ $item->keterangan_areal }} m<sup>2</sup>
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Lahan sawah , luas ...... m<sup>2</sup>
                                </p>
                            @endif


                            @if ($item->areal == "Lahan Kering ")
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Lahan Kering , luas {{ $item->keterangan_areal }} m<sup>2</sup>
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Lahan Kering , luas ...... m<sup>2</sup>
                                </p>
                            @endif


                            @if ($item->areal == "Rumah Kaca")
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Rumah Kaca , jumlah {{ $item->keterangan_areal }} buah
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Rumah Kaca , jumlah ..... buah
                                </p>
                            @endif

                            @if ($item->areal == "Lahan Paving")
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Lahan paving , luas {{ $item->keterangan_areal }} m<sup>2</sup>
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Lahan paving , luas ...... m<sup>2</sup>
                                </p>
                            @endif
                        </td>
                        
                        <td colspan="5">
                             <p class="m-1" style="padding-left:5px;">B. Peralatan</p>

                            @if ($item->peralatan == "Ember")
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Ember , jumlah {{ $item->jumlah_peralatan }}
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Ember , jumlah ......
                                </p>
                            @endif
                            
                            @if ($item->peralatan == "Polibag")
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Polibag , jumlah {{ $item->jumlah_peralatan }}
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Polibag, jumlah .......
                                </p>
                            @endif

                            @if ($item->peralatan == "Pot/drum")
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Pot/drum, jumlah {{ $item->jumlah_peralatan }}
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Pot/drum, jumlah .......
                                </p>
                            @endif

                            @if ($item->peralatan == "Mulsa")
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Mulsa
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Mulsa
                                </p>
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <td height="80px" colspan="5">
                            <p class="m-1" style="padding-left:5px;">C. Benih & Pupuk</p>
                            
                            @if (isset($item->jumlah_benih))
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Benih, (Disediakan peneliti)
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Benih, (Disediakan peneliti)
                                </p>
                            @endif

                            @if (isset($item->jumlah_petroganik))
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> Petroganik, {{ $item->jumlah_phonska }} Kg
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Petroganik, ........ Kg
                                </p>
                            @endif

                            @if (isset($item->jumlah_phonska))
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> Phonska, {{ $item->jumlah_phonska }} Kg
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Phonska, ........ Kg
                                </p>
                            @endif

                            @if (isset($item->jumlah_urea))
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> Urea, {{ $item->jumlah_urea }} Kg
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Urea, ........ Kg
                                </p>
                            @endif
                            
                            
                            
                        </td>
                        <td colspan="5">
                             @if (isset($item->jumlah_za))
                                <p style="padding-left:20px;margin-top:40px;margin-left:8px;margin-bottom:8px">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> ZA , {{ $item->jumlah_za }} Kg
                                </p>
                            @else
                                <p style="padding-left:20px;margin-top:40px;margin-left:8px;margin-bottom:8px">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> ZA , ....... Kg
                                </p>
                            @endif

                             @if (isset($item->jumlah_zk))
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> ZK , {{ $item->jumlah_zk }} Kg
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> ZK , ...... Kg
                                </p>
                            @endif

                            @if (isset($item->jumlah_kci))
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> KCI , {{ $item->jumlah_kci }} Kg
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> KCI , ...... Kg
                                </p>
                            @endif

                            @if (isset($item->benih_lain))
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> Lain-lain , {{ $item->benih_lain }}  {{ $item->benih_lain }} Kg
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Lain-lain , ...... Kg
                                </p>
                            @endif
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="5">
                            <p class="m-1" style="padding-left:5px;">D. Sarana lain</p>

                            @if (isset($item->pestisida))
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" checked="true" aria-label="Checkbox for following text input"> Pestisida sesuai kebutuhan
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Pestisida sesuai kebutuhan
                                </p>
                            @endif

                            @if (isset($item->herbisida))
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" checked="true" aria-label="Checkbox for following text input"> Herbisida sesuai kebutuhan
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Herbisida sesuai kebutuhan
                                </p>
                            @endif

                            @if (isset($item->fungisida))
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> Fungisida sesuai kebutuhan
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Fungisida sesuai kebutuhan
                                </p>
                            @endif
                            
                        </td>
                        <td colspan="5">
                            @if (isset($item->plastik_barrier))
                                <p style="padding-left:20px;margin-top:40px;margin-left:8px;margin-bottom:8px">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> Plastik Barier
                                </p>
                            @else
                                <p style="padding-left:20px;margin-top:40px;margin-left:8px;margin-bottom:8px">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Plastik Barier
                                </p>
                            @endif

                            @if (isset($item->jaring_burung))
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> Jaring Burung
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Jaring Burung
                                </p>
                            @endif


                            @if (isset($item->sarana_lain))
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> Lain-lain , {{ $item->sarana_lain }}
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Lain-lain , ......
                                </p>
                            @endif
                            
                        </td>
                    </tr>
                    <tr height="130px">
                        <td colspan="3">
                            <p class="text-center">
                                 Peneliti <br/><br/><br/><br/><br/><br/>
                                 {{ $item->user->name }}
                            </p>
                        </td>
                        <td colspan="4">
                            <p class="mb-0">
                                 <u>Catatan Pengelola Kebun:</u>
                            </p>
                            <p>
                                 {{ $item->catatan_staf_muda }}
                            </p>
                        </td>
                        <td colspan="3">
                            <p class="text-center">
                                 Pengelola Kebun<br/><br/><br/><br/><br/><br/>
                                 Ganep Setiawan
                            </p>
                        </td>
                    </tr>

                    <tr height="130px">
                        <td colspan="5">
                            <p class="mb-0">
                                 <u>Komentar VP Riset :</u>
                            </p>
                            <p>
                                {{ $item->catatan_vp }}
                            </p>
                        </td>
                        <td colspan="5">
                            <p class="text-center">
                                 Mengetahui VP Riset *
                                 <br/><br/><br/><br/><br/><br/>
                                 Muammar Ma'arif
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        
        </div>

    </div>

    
</div>

@endsection
