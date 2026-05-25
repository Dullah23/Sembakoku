private void btnCetakActionPerformed(java.awt.event.ActionEvent evt) {                                         
    if (tabelTransaksi.getRowCount() == 0) {
        JOptionPane.showMessageDialog(this, "Tidak ada data di tabel untuk dicetak!");
        return;
    }

    StringBuilder struk = new StringBuilder();
    struk.append("=================================\n");
    struk.append("         STRUK BELANJA\n");
    struk.append("  TOKO SAMI LARIS - SOLOKARTO\n");
    struk.append("=================================\n");

    for (int i = 0; i < tabelTransaksi.getRowCount(); i++) {
        struk.append("ID Konsumen   : ").append(tabelTransaksi.getValueAt(i, 0)).append("\n");
        struk.append("Nama          : ").append(tabelTransaksi.getValueAt(i, 1)).append("\n");
        struk.append("Alamat        : ").append(tabelTransaksi.getValueAt(i, 2)).append("\n");
        struk.append("---------------------------------\n");
        struk.append("Barang        : ").append(tabelTransaksi.getValueAt(i, 3)).append("\n");
        struk.append("Harga Satuan  : ").append(tabelTransaksi.getValueAt(i, 4)).append("\n");
        struk.append("Jumlah Beli   : ").append(tabelTransaksi.getValueAt(i, 5)).append("\n");
        struk.append("Jumlah Belanja: ").append(tabelTransaksi.getValueAt(i, 6)).append("\n");
        struk.append("Diskon        : ").append(tabelTransaksi.getValueAt(i, 7)).append("\n");
        struk.append("TOTAL BAYAR   : ").append(tabelTransaksi.getValueAt(i, 8)).append("\n");
        struk.append("=================================\n\n");
    }

    struk.append("     TERIMA KASIH TELAH BELANJA!\n");
    struk.append("=================================\n");

    // Tampilkan preview
    JTextArea textArea = new JTextArea(struk.toString());
    textArea.setEditable(false);
    textArea.setFont(new java.awt.Font("Monospaced", java.awt.Font.PLAIN, 12));
    JScrollPane scrollPane = new JScrollPane(textArea);
    scrollPane.setPreferredSize(new java.awt.Dimension(350, 300));

    int result = JOptionPane.showConfirmDialog(this, scrollPane, "Preview Struk Belanja", JOptionPane.OK_CANCEL_OPTION);

    if (result == JOptionPane.OK_OPTION) {
        cetakStrukPDF(struk.toString());
    }
    }