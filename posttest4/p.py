data_mahasiswa = []

print(
    """
===========================
|      DATA MAHASISWA      |
===========================
|     1. TAMBAH DATA       |            
|     2. TAMPILKAN DATA    |        
|     3. UBAH DATA         |   
|     4. HAPUS DATA        |    
|     5. KELUAR            |
===========================
"""
)


while True:
    pilih = int(input("PILIH : "))

    if pilih == 1:
        nama = input("NAMA : ")
        nim = input("NIM : ")
        kelas = input("KELAS : ")
        data_mahasiswa.append([nama,nim,kelas])
        print("Data Berhasil ditambahkan")
    elif pilih == 2:
        if len(data_mahasiswa) == 0:
            print("Data Mahasiswa Kosong")
        else:
            for i in range(len(data_mahasiswa)):
                print(f"\nData Mahasiswa ke-{i+1}\nNAMA : {data_mahasiswa[i][0]}\nNIM : {data_mahasiswa[i][1]}\nKELAS : {data_mahasiswa[i][2]}\n")
    elif pilih == 3:
        if len(data_mahasiswa) == 0:
            print("Data Mahasiswa Kosong")
        else:
            nama_lama = input("NAMA YANG INGIN DIUBAH : ")
            for data in data_mahasiswa:
                if data[0] == nama_lama:
                    nama_baru = input("NAMA : ")
                    nim_baru = input("NIM : ")
                    kelas_baru = input("KELAS : ")
                    data[0] = nama_baru
                    data[1] = nim_baru
                    data[2] = kelas_baru
                    print("Data Selesai diubah")
                    break
            else:
                print("Data Tidak Ditemukan")
    elif pilih == 4:
        if len(data_mahasiswa) == 0:
            print("Tidak ada data mahasiswa.")
        else:
            nama = input("NAMA YANG INGIN DIHAPUS : ")
            for i in range(len(data_mahasiswa)):
                if data_mahasiswa[i][0] == nama:
                    del data_mahasiswa[i]
                    print("Data berhasil dihapus!")
                    break
            else:
                print("Nama mahasiswa tidak ditemukan.")
    elif pilih == 5:
        print("Terima Kasih Telah Menggunakan Program Kami")
        break
    else:
        print("Anda salah pilih opsi")