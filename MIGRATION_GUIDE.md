# Migration Guide: Asesmen Awal Kebidanan Rawat Jalan

## Overview
This document outlines the field ID mappings and structural changes needed to align the Blade template with the new Angular form structure.

## Field ID Mapping (OLD → NEW)

### Header Information
- `21003003` → `21002626` (Masuk RS tanggal / Tanggal dan Jam Datang)
- `21003004` → `21002627` (Pengkajian tanggal / Tanggal dan Jam Pengkajian)
- `21003005` → `21002628` (Masuk Poliklinik / Masuk Ruangan)

### Anamnesa Section
- `21003007` → `21002629` (Auto Anamnesa)
- `21003008` → `21002630` (Allo Anamnesa)
- `21003009` → `21002631` (Keluarga)
- `21003010` → `21002632` (Penerjemah Bahasa)
- `21003011` → `21002633` (Orang Lain)
- `21003012` → `21002634` (Nama)
- `21003013` → `21002635` (Hubungan)

### Cara Masuk Section
- `21003015` → `21002636` (Jalan Tanpa Bantuan)
- `21003016` → `21002639` (Jalan Dengan Bantuan)
- `21003017` → `21002637` (Tempat Tidur Dorong)
- `21003018` → DELETE (removed)
- `21003019` → `21002638` (Lain-lain textbox)

### Asal Masuk Section  
- `21003021` → `21002640` (Non Rujukan)
- `21003022` → `21002641` (Rujukan)
- `21003023` → DELETE (removed)

### Alasan Masuk
- `21003024` → `21002642` (Alasan Masuk textarea)

## New Sections to Add

### 1. RIWAYAT KESEHATAN
```
A. Penyakit yang pernah diderita: 21002643
B. Riwayat pengobatan saat di rumah:
   - Tidak: 21002644
   - Ya: 21002645
   
Table: Riwayat Penggunaan Obat
Row 1: 21002646-21002650 (Nama Obat, Dosis, Cara Pemberian, Frekuensi, Waktu Terakhir)
Row 2: 21002651-21002655
Row 3: 21002656-21002660
Row 4: 21002661-21002665

C. Operasi yang pernah dialami: 21002666 (textarea)
D. Faktor keturunan Gemeli:
   - Tidak: 21002667
   - Ya: 21002668
E. Riwayat penyakit herediter:
   - Tidak ada: 21002669
   - Ada, Jelaskan: 21002670
   - Text: 21002671
F. Riwayat penyakit dalam keluarga: 21002672
G. Ketergantungan terhadap:
   - Obat-obatan: 21002673
   - Rokok: 21002674
   - Alkohol: 21002675
   - Lainnya checkbox: 21002676
   - Lainnya text: 21002677
   - Tidak ada: 21002678
H. Riwayat pekerjaan:
   - Tidak: 21002679
   - Ya, Jelaskan: 21002680
   - Text: 21002681
```

### 2. RIWAYAT KEHAMILAN
Table with 5 rows (21002682-21002711)
Each row: P/L, Umur Anak, KU Anak, BBL, Riwayat Persalinan, Ditolong oleh

### 3. RIWAYAT OBSTETRI
```
A. Menarche Umur: 21002712
Menstruasi:
   - Teratur, Siklus: 21002713, 21002714
   - Tidak Teratur, Siklus: 21002715, 21002716
Sakit saat menstruasi:
   - Tidak: 21002717
   - Ya: 21002718
Menikah yang ke: 21002719
Lama pernikahan: 21002720
Kontrasepsi yang pernah digunakan: 21002721
Lamanya: 21002722
B. Riwayat Imunisasi:
   - TT 1: 21002723
   - TT 2: 21002724
```

### 4. DATA KEHAMILAN SEKARANG
```
G: 21002725
P: 21002726
A: 21002727
HPHT: 21002728
Tanggal harapan lahir: 21002729 (datetime)
Keluhan: 21002730
```

### 5. PEMERIKSAAN FISIK
```
Keadaan Umum: 21002731
Kesadaran: 21002732
Berat Badan: 21002733 (kg)
Tinggi Badan: 21002734 (cm)
Suhu: 21002735 (°C)
Tekanan Darah: 21002736 (mmHg)
Nadi: 21002737 (x/menit)
   - Teratur: 21002738
   - Tidak Teratur: 21002739
Pernafasan: 21002740 (x/menit)
   - Teratur: 21002741
   - Tidak Teratur: 21002742
Nyeri:
   - Tidak: 21002743
   - Ya, Score: 21002744
   - Score value: 21002745
```

### 6. STATUS BIO-PSIKO-SOSIO-SPIRITUAL-KULTURAL
```
Status Biologis:
   - Pola Makan: 21002746
   - Pola Minum: 21002747
   - BAK: 21002748
   - BAB: 21002749

Status Psikologis:
   - Cemas: 21002750
   - Takut: 21002751
   - Marah: 21002752
   - Sedih: 21002753
   - Kecenderungan bunuh diri: 21002754
   - dll: 21002755

Status Sosial - Pekerjaan:
   - Wiraswasta: 21002756
   - Pegawai Negeri: 21002757
   - Pegawai Swasta: 21002758
   - Tidak Bekerja: 21002759
   - Siswa/Mahasiswa: 21002760
   - Pensiun: 21002761
Alamat Rumah: 21002762
No. Telepon: 21002763

Spiritual dan Kulturasi - Agama:
   - Islam: 21002764
   - Protestan: 21002765
   - Katolik: 21002766
   - Hindu: 21002767
   - Budha: 21002768
   - Konghucu: 21002769
   - Lain-lain: 21002770
   - Text: 21002771

Kegiatan Spiritual:
   - Ada, Sebutkan: 21002772
   - Tidak ada: 21002773
   - Text: 21002774

Bahasa sehari-hari:
   - Indonesia: 21002775
   - Inggris: 21002776
   - Daerah: 21002777
   - Lain-lain: 21002778
```

### 7. STATUS EKONOMI
```
Cara Pembayaran:
   - Pribadi: 21002779
   - Perusahaan: 21002780
   - Asuransi: 21002781

Pendapatan:
   - UMR: 21002782
   - UMR s/d 5 juta: 21002783
   - 5 s/d 10 juta: 21002784
   - 10 s/d 15 juta: 21002785
   - > 15 juta: 21002786
```

### 8. RIWAYAT ALERGI
```
- Ya, Sebutkan: 21002787
- Tidak: 21002788
- Text: 21002789
- Sticker tanda alergi: 21002790
- Text 2: 21002791
```

### 9. ASESMEN NYERI
```
Wong Baker Scale Images (0, 2, 4, 6, 8, 10)

Score Interpretation:
   - 0 = Tidak ada Nyeri: 21002792
   - 1-3 = Nyeri Ringan: 21002793
   - 4-6 = Nyeri Sedang: 21002794
   - 7-10 = Nyeri Berat: 21002795

Penilaian Nyeri:
Provokatif:
   - Ruda paksa: 21002796
   - Benturan: 21002797
   - Sayatan: 21002798
   - dll: 21002799

Quality:
   - Tertusuk: 21002800
   - Tertekan/tertindih: 21002801
   - Diiris-iris: 21002802
   - dll: 21002803

Regional:
   - Lokasi: 21002804
   - Text: 21002805

Menjalar:
   - Tidak: 21002806
   - Ya, Ke: 21002807
   - Text: 21002808

Scala: 21002809

Time:
   - Jarang: 21002810
   - Hilang timbul: 21002811
   - Terus menerus: 21002812
```

### 10. RESIKO JATUH GET UP AND GO
```
Pengkajian Table:
A. Cara Berjalan:
   - Ya: 21002813
   - Tidak: 21002814

B. Menopang saat duduk:
   - Ya: 21002815
   - Tidak: 21002816

Hasil:
   - Tidak Beresiko (Keterangan): 21002817
   - Risiko Rendah (Keterangan): 21002818
   - Risiko Tinggi (Keterangan): 21002819

Tindakan:
Row 1 (Tidak beresiko): 21002820 (Ya), 21002821 (Tidak), 21002822 (Nama Petugas)
Row 2 (Resiko rendah): 21002823, 21002824, 21002825
Row 3 (Resiko tinggi): 21002826, 21002827, 21002828
Row 4 (Edukasi): 21002829, 21002830, 21002831
```

### 11. ASESMEN FUNGSIONAL
```
Sensorik - Penglihatan:
   - Normal: 21002832
   - Kabur: 21002833
   - Kacamata: 21002834
   - Lensa kontak: 21002835

Penciuman:
   - Normal: 21002836
   - Tidak: 21002837

Pendengaran:
   - Normal: 21002838
   - Tuli kanan/kiri: 21002839
   - Alat bantu: 21002840

Kognitif:
   - Orientasi penuh: 21002841
   - Pelupa: 21002842
   - Bingung: 21002843
   - Tidak dapat dimengerti: 21002844

Motorik - Aktivitas sehari-hari:
   - Mandiri: 21002845
   - Bantuan Minimal: 21002846
   - Bantuan Sebagian: 21002847
   - Ketergantungan Total: 21002848

Berjalan:
   - Tidak ada kesulitan: 21002849
   - Perlu bantuan: 21002850
   - Sering Jatuh: 21002851
   - Kelumpuhan: 21002852
```

### 12. RESIKO NUTRISIONAL (MST)
```
Parameter 1 - Penurunan berat badan:
   - Tidak: 21002853 (0 poin)
   - Tidak Yakin: 21002854 (2 poin)
   - Ya, 1-5 Kg: 21002855 (1 poin)
   - 6-10 Kg: 21002856 (2 poin)
   - 11-15 Kg: 21002857 (3 poin)
   - > 15 Kg: 21002858 (4 poin)

Parameter 2 - Asupan makan menurun:
   - Tidak: 21002859 (0 poin)
   - Tidak yakin: 21002860 (1 poin)

Total Score: 21002861

Keterangan:
- Skor 0-1: tidak beresiko
- Skor 2-3: berisiko (Asuhan Gizi oleh Dietisen)
- Skor > 4: Malnutrisi (Asuhan Gizi oleh Dietisen)
```

### 13. KEBUTUHAN EDUKASI
```
A. Hambatan pembelajaran:
   - Tidak: 21002862
   - Ya: 21002863

B. Jenis hambatan:
   - Pendengaran: 21002864
   - Penglihatan: 21002865
   - Kognitif: 21002866
   - Fisik: 21002867
   - Budaya: 21002868
   - Agama: 21002869
   - Emosi: 21002870
   - Bahasa: 21002871
   - Lain-lain: 21002872
   - Text: 21002873

C. Penerjemah:
   - Tidak: 21002874
   - Ya: 21002875
   - Text: 21002876

D. Kebutuhan pembelajaran:
   - Diagnosa & Manajemen: 21002877
   - Obat-obatan: 21002878
   - Perawatan Luka: 21002879
   - Rehabilitasi: 21002880
   - Manajemen nyeri: 21002881
   - Diet dan nutrisi: 21002882
   - Lain-lainnya: 21002883
   - Text: 21002884
```

### 14. PERENCANAAN PULANG
```
Kriteria Discharge Planning:
A. Umur > 65:
   - Ya: 21002885
   - Tidak: 21002886

B. Keterbatasan mobilitas:
   - Ya: 21002887
   - Tidak: 21002888

C. Perawatan lanjutan:
   - Ya: 21002889
   - Tidak: 21002890

D. Bantuan aktivitas:
   - Ya: 21002891
   - Tidak: 21002892

Perencanaan:
   - Perawatan diri: 21002893
   - Latihan fisik lanjutan: 21002894
   - Pemantauan obat: 21002895
   - Pendampingan tenaga khusus: 21002896
   - Pemantauan diet: 21002897
   - Home care: 21002898
   - Perawatan luka: 21002899
   - Alat bantu: 21002900
```

### 15. RIWAYAT PENGGUNAAN OBAT
```
Textarea: 21002901
```

### 16. DIAGNOSA KEPERAWATAN
```
Textarea: 21002902
```

### 17. RENCANA ASUHAN KEPERAWATAN
```
Textarea: 21002903
```

### 18. TINDAKAN
```
Table with 4 rows:
Row 1: 21002904 (datetime), 21002905 (tindakan), 21002906 (nama)
Row 2: 21002907, 21002908, 21002909
Row 3: 21002910, 21002911, 21002912
Row 4: 21002913, 21002914, 21002915
```

### Yang Melakukan Pengkajian
```
Tanggal & Jam: 21002916 (datetime)
Nama Perawat: 21002917 (combobox)
```

## Sections to Remove

The following sections from the old template should be REMOVED:
1. STATUS FISIK (all Tanda Vital, Kesadaran, Sirkulasi, etc.)
2. Capilari Refill
3. Ekstremitas
4. Kulit
5. Luka Gangren
6. Turgor
7. Obstetri dan Ginekologi (the old version)
8. Status Biologis (old field IDs)
9. Status Psikologis (old field IDs)
10. Status Sosial (old field IDs)
11. Spiritual dan Kulturasi (old field IDs)
12. Pendidikan section
13. Riwayat Kesehatan (old field IDs 21003XXX)
14. Old Asesmen Nyeri with FLACC scale
15. Old Resiko Jatuh Humpty Dumpty
16. Old Asesmen Fungsional
17. Old Resiko Nutrisional
18. Old Kebutuhan Edukasi
19. Old Perencanaan Pulang

## Title Changes
- Change: "Asesmen Awal Keperawatan I G D" 
- To: "Asesmen Awal Kebidanan Rawat Jalan"

## Implementation Notes

1. **Angular Controller**: The file references controller `cetakAsesmenAwalKeperawatanIGDCtrl` which should be changed to match the new controller `AsesmenAwalKeperRJKebidananCtrl`

2. **Title Tag**: Update `<title>` from "Asesmen Awal Keperawatan I G D" to "Asesmen Awal Kebidanan Rawat Jalan"

3. **Data Loading**: The blade template uses `$res['d']` to loop through data. Ensure the controller passes data with the new field IDs (21002XXX range)

4. **Checkbox Rendering**: All checkboxes should use the pattern:
   ```blade
   <input type="checkbox"
       @foreach ($res['d'] as $item)
       @if ($item->emrdfk == 'FIELD_ID') checked
       @endif
       @endforeach
       ng-model="item.obj[FIELD_ID]"/>
   ```

5. **Textbox Rendering**: All textboxes should use:
   ```blade
   <input type="textbox" ng-model="item.obj[FIELD_ID]" 
       @if ($item->emrdfk == 'FIELD_ID') value="" @endif>
   ```

6. **Textarea Rendering**: All textareas should use:
   ```blade
   <textarea>@{{ item.obj[FIELD_ID] }}</textarea>
   ```

7. **DateTime Rendering**: All datetime fields should use:
   ```blade
   @{{ item.obj[FIELD_ID] }}
   ```

8. **Tables**: Maintain consistent table structure with borders for sections that require tables (Riwayat Kehamilan, Tindakan, etc.)

## Next Steps

1. Back up the current file
2. Create new template based on this mapping
3. Test with sample data from the controller
4. Verify all field IDs match between Angular controller and Blade template
5. Ensure proper styling matches the original design
6. Test print functionality

## Files Affected
- `/resources/views/report/cetakAsesmenAwalKebidananRawatJalan.blade.php` (main file)
- Angular Controller: `AsesmenAwalKeperRJKebidananCtrl` 

## Database Fields
All fields use the ID range: 21002626 - 21002917
EMR FK: 21035
