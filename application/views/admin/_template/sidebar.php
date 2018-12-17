      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': ''
         ?>">
          <a class="nav-link" href="<?php echo base_url('admin'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dasbor</span>
          </a>
        </li>
        <li class="nav-item <?php echo $this->uri->segment(2) == 'alternatif' ? 'active': ''
         ?>">
          <a class="nav-link" href="<?php echo base_url('admin/alternatif') ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Alternatif</span></a>
        </li>
        <li class="nav-item <?php echo $this->uri->segment(2) == 'aspek_penilaian' ? 'active': ''
         ?>">
          <a class="nav-link" href="<?php echo base_url('admin/aspek_penilaian') ?>">
            <i class="fas fa-fw fa-list"></i>
            <span>Aspek Penilaian</span></a>
        </li>
        <li class="nav-item <?php echo $this->uri->segment(2) == 'sub_kriteria' ? 'active': ''
         ?>">
          <a class="nav-link" href="<?php echo base_url('admin/sub_kriteria') ?>">
            <i class="fas fa-fw fa-list"></i>
            <span>Sub-Kriteria</span></a>
        </li>
        <li class="nav-item <?php echo $this->uri->segment(2) == 'penilaian_alternatif' ? 'active': ''
         ?>">
          <a class="nav-link" href="<?php echo base_url('admin/penilaian_alternatif') ?>">
            <i class="fas fa-fw fa-check-circle"></i>
            <span>Penilaian Alternatif</span></a>
        </li>
        <li class="nav-item <?php echo $this->uri->segment(2) == 'hasil' ? 'active': ''
         ?>">
          <a class="nav-link" href="<?php echo base_url('admin/hasil') ?>">
            <i class="fas fa-fw fa-sitemap"></i>
            <span>Hasil</span></a>
        </li>
        
      </ul>