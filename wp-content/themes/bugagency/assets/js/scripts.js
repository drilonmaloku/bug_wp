document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('header');
    const headerContainer = document.querySelector('.header-container');

    let lastScrollTop = 0;
    let ticking = false;
    let scrollTimeout;
    
    function updateHeader() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > 110) {
            header.classList.add("scrolled");
        } else if (scrollTop < 90) {
            header.classList.remove("scrolled");
        }
        
        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; 
        ticking = false;
    }
    
    function throttleScroll() {
        if (!ticking) {
            requestAnimationFrame(updateHeader);
            ticking = true;
        }
        
        clearTimeout(scrollTimeout);
        
        scrollTimeout = setTimeout(() => {
            if (!ticking) {
                requestAnimationFrame(updateHeader);
                ticking = true;
            }
        }, 150);
    }
    
    window.addEventListener("scroll", throttleScroll, { passive: true });

  const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
  const menuItems = document.querySelector('.menu-items');
  
  function closeMobileMenu() {
    if (headerContainer) {
      headerContainer.style.transition = 'box-shadow 0.3s ease, border-radius 0.3s ease';
      headerContainer.style.boxShadow = '';
      headerContainer.style.borderBottomLeftRadius = '';
      headerContainer.style.borderBottomRightRadius = '';
    }

    mobileMenuToggle.classList.remove('active');

    setTimeout(() => {
      menuItems.classList.remove('active');
      setTimeout(() => {
        document.body.style.overflow = 'auto';
      }, 150);
    }, 10);
  }
  
  if (mobileMenuToggle && menuItems) {
    mobileMenuToggle.addEventListener('click', function () {
      const isActive = menuItems.classList.contains('active');

      if (isActive) {
        closeMobileMenu();
      } else {
        if (headerContainer) {
          headerContainer.style.transition = 'box-shadow 0.3s ease, border-radius 0.3s ease';
          headerContainer.style.boxShadow = 'none';
          headerContainer.style.borderBottomLeftRadius = '0';
          headerContainer.style.borderBottomRightRadius = '0';
        }

        mobileMenuToggle.classList.add('active');

        setTimeout(() => {
          menuItems.classList.add('active');
          setTimeout(() => {
            document.body.style.overflow = 'hidden';
          }, 150);
        }, 10);
      }
    });

    const menuLinks = menuItems.querySelectorAll('a');
    menuLinks.forEach(link => {
      link.addEventListener('click', function () {
        closeMobileMenu();
      });
    });

    document.addEventListener('click', function (e) {
      if (!header.contains(e.target) && menuItems.classList.contains('active')) {
        closeMobileMenu();
      }
    });

    window.addEventListener('resize', function () {
      if (window.innerWidth > 768) {
        closeMobileMenu();
      }
    });
  }





  const gallery = document.querySelector('.vehicle-gallery');
  const leftButton = document.getElementById('scroll-left');
  const rightButton = document.getElementById('scroll-right');
  
  // Only proceed if all elements exist
  if (gallery && leftButton && rightButton) {
    const visibleImages = 4;
    const totalImages = document.querySelectorAll('.gallery-item').length;

    if (totalImages <= visibleImages) {
      leftButton.style.display = 'none';
      rightButton.style.display = 'none';
    }

    let scrollAmount = 0;
    const galleryItem = document.querySelector('.gallery-item');
    const itemWidth = galleryItem ? galleryItem.offsetWidth + 10 : 0; // width + margin-right

    leftButton.addEventListener('click', () => {
      if (scrollAmount > 0) {
        scrollAmount -= itemWidth;
        gallery.style.transform = `translateX(-${scrollAmount}px)`;
      } else {
        // If at the beginning, scroll to the last set of images
        scrollAmount = (totalImages - visibleImages) * itemWidth;
        gallery.style.transform = `translateX(-${scrollAmount}px)`;
      }
    });

    rightButton.addEventListener('click', () => {
      if (scrollAmount < (totalImages - visibleImages) * itemWidth) {
        scrollAmount += itemWidth;
        gallery.style.transform = `translateX(-${scrollAmount}px)`;
      } else {
        // If at the end, scroll back to the first set of images
        scrollAmount = 0;
        gallery.style.transform = `translateX(-${scrollAmount}px)`;
      }
    });
  }

  // Fullscreen Image Modal Functionality
  const modal = document.getElementById('fullscreen-modal');
  const fullscreenImage = document.querySelector('.fullscreen-image');
  const closeButton = document.querySelector('.close-fullscreen');
  const prevButton = document.querySelector('.prev-image');
  const nextButton = document.querySelector('.next-image');
  const galleryImages = document.querySelectorAll('.gallery-image');
  
  if (modal && fullscreenImage && closeButton && galleryImages.length > 0) {
    let currentImageIndex = 0;
    let imageUrls = [];
    
    // Collect all unique image URLs
    galleryImages.forEach((img, index) => {
      if (index < galleryImages.length / 2) { 
        imageUrls.push(img.src);
      }
    });
  
  
  galleryImages.forEach((img, index) => {
    img.addEventListener('click', () => {
      currentImageIndex = index < galleryImages.length / 2 ? index : index - galleryImages.length / 2;
      openFullscreen(currentImageIndex);
    });
  });
  
  function openFullscreen(index) {
    currentImageIndex = index;
    fullscreenImage.src = imageUrls[currentImageIndex];
    modal.classList.add('active');
    document.body.style.overflow = 'hidden'; 
  }
  
  function closeFullscreen() {
    modal.classList.remove('active');
    document.body.style.overflow = 'auto';
  }
  
  function showPreviousImage() {
    currentImageIndex = currentImageIndex > 0 ? currentImageIndex - 1 : imageUrls.length - 1;
    fullscreenImage.src = imageUrls[currentImageIndex];
  }
  
  function showNextImage() {
    currentImageIndex = currentImageIndex < imageUrls.length - 1 ? currentImageIndex + 1 : 0;
    fullscreenImage.src = imageUrls[currentImageIndex];
  }
  
  // Event listeners for modal controls
  closeButton.addEventListener('click', closeFullscreen);
  if (prevButton) prevButton.addEventListener('click', showPreviousImage);
  if (nextButton) nextButton.addEventListener('click', showNextImage);
  
  // Close modal when clicking outside the image
  modal.addEventListener('click', (e) => {
    if (e.target === modal) {
      closeFullscreen();
    }
  });
  
  // Keyboard navigation
  document.addEventListener('keydown', (e) => {
    if (modal.classList.contains('active')) {
      switch(e.key) {
        case 'Escape':
          closeFullscreen();
          break;
        case 'ArrowLeft':
          showPreviousImage();
          break;
        case 'ArrowRight':
          showNextImage();
          break;
      }
    }
  });
  } // End modal null check
  

});

  const filterFabButton = document.querySelector('.filter-fab-button');
  const filterOverlay = document.getElementById('mobile-filter-overlay');
  const filterSheet = document.getElementById('mobile-filter-sheet');
  const filterClose = document.querySelector('.filter-sheet-close');
  const filterClearBtn = document.querySelector('.filter-clear-btn');

  if (filterSheet && filterOverlay) {
    filterSheet.classList.remove('active');
    filterOverlay.classList.remove('active');
    filterOverlay.style.display = 'none';
    document.body.style.overflow = '';
    
    if (filterFabButton) {
      filterFabButton.setAttribute('aria-expanded', 'false');
    }
  }  if (filterFabButton && filterSheet && filterOverlay) {
    filterFabButton.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      
      if (!filterSheet.classList.contains('active')) {
        openFilterSheet();
      }
    });
  }

  if (filterClose) {
    filterClose.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      closeFilterSheet();
    });
  }

  if (filterOverlay) {
    filterOverlay.addEventListener('click', function(e) {
      if (e.target === filterOverlay) {
        closeFilterSheet();
      }
    });
  }

  if (filterClearBtn) {
    filterClearBtn.addEventListener('click', function() {
      clearAllFilters();
    });
  }

  let startY = 0;
  let currentY = 0;
  let isDragging = false;

  if (filterSheet) {
    filterSheet.addEventListener('touchstart', function(e) {
      if (e.target.closest('.filter-sheet-header')) {
        startY = e.touches[0].clientY;
        isDragging = true;
        filterSheet.style.transition = 'none';
      }
    });

    filterSheet.addEventListener('touchmove', function(e) {
      if (!isDragging) return;
      
      currentY = e.touches[0].clientY;
      const deltaY = currentY - startY;
      
      if (deltaY > 0) {
        filterSheet.style.transform = `translateY(${deltaY}px)`;
      }
    });

    filterSheet.addEventListener('touchend', function(e) {
      if (!isDragging) return;
      
      isDragging = false;
      filterSheet.style.transition = 'transform 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
      const deltaY = currentY - startY;
      
      if (deltaY > 100) {
        closeFilterSheet();
      } else {
        filterSheet.style.transform = 'translateY(0)';
      }
    });
  }

  function openFilterSheet() {
    if (filterOverlay && filterSheet) {
      filterOverlay.style.display = 'block';
      filterSheet.style.visibility = 'visible';
      
      requestAnimationFrame(() => {
        filterOverlay.classList.add('active');
        filterSheet.classList.add('active');
      });
      
      document.body.style.overflow = 'hidden';
      
      if (filterFabButton) {
        filterFabButton.setAttribute('aria-expanded', 'true');
      }
    }
  }

  function closeFilterSheet() {
    if (filterOverlay && filterSheet) {
      filterSheet.classList.remove('active');
      filterOverlay.classList.remove('active');
      
      setTimeout(() => {
        if (filterOverlay && !filterOverlay.classList.contains('active')) {
          filterOverlay.style.display = 'none';
        }
        if (filterSheet && !filterSheet.classList.contains('active')) {
          filterSheet.style.visibility = 'hidden';
          filterSheet.style.transform = '';
        }
      }, 300);
      
      document.body.style.overflow = '';
      
      if (filterFabButton) {
        filterFabButton.setAttribute('aria-expanded', 'false');
      }
    }
  }

  function clearAllFilters() {
    const selects = filterSheet.querySelectorAll('select');
    selects.forEach(select => {
      select.selectedIndex = 0;
    });
    
    const checkboxes = filterSheet.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(checkbox => {
      checkbox.checked = false;
    });
    
    if (filterClearBtn) {
      const originalText = filterClearBtn.textContent;
      filterClearBtn.textContent = 'Pastruar!';
      filterClearBtn.style.background = '#28a745';
      filterClearBtn.style.transition = 'background 0.3s ease';
      
      setTimeout(() => {
        filterClearBtn.textContent = originalText;
        filterClearBtn.style.background = '';
      }, 1200);
    }
  }

  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && filterSheet && filterSheet.classList.contains('active')) {
      closeFilterSheet();
    }
  });

  function initMarkModelFilter() {
    const markSelect = document.getElementById('mark');
    const modelSelect = document.getElementById('model');
    
    const mobileMarkSelect = document.getElementById('mobile-mark');
    const mobileModelSelect = document.getElementById('mobile-model');
    
    // Initialize both desktop and mobile filters
    initFilterPair(markSelect, modelSelect);
    initFilterPair(mobileMarkSelect, mobileModelSelect);
  }
  
  function initFilterPair(markSelect, modelSelect) {
    if (!markSelect || !modelSelect) return;
    
    const allModelOptions = Array.from(modelSelect.querySelectorAll('option')).slice(1); 
    
    function updateModelOptions(selectedMark, preserveValue = null) {
      const valueToPreserve = preserveValue || modelSelect.value;
      
      const placeholderText = selectedMark ? 'Modeli' : 'Zgjedh marken';
      modelSelect.innerHTML = `<option value="">${placeholderText}</option>`;
      
      if (!selectedMark) {
        return;
      }
      
      const formData = new FormData();
      formData.append('action', 'get_models_for_mark');
      formData.append('mark_slug', selectedMark);
      formData.append('nonce', window.ajaxpagination?.nonce || '');
      
      fetch(window.ajaxpagination?.ajaxurl || '/wp-admin/admin-ajax.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        if (data.success && data.data) {
          data.data.forEach(model => {
            const option = document.createElement('option');
            option.value = model.slug;
            option.textContent = model.name;
            modelSelect.appendChild(option);
          });
          // Restore preserved value after AJAX update
          if (valueToPreserve) {
            const modelExists = Array.from(modelSelect.options).some(option => option.value === valueToPreserve);
            if (modelExists) {
              modelSelect.value = valueToPreserve;
            }
          }
        }
      })
      .catch(error => {
        console.error('Error fetching models:', error);
        // Fallback: show filtered models if AJAX fails and mark is selected
        if (selectedMark) {
          allModelOptions.forEach(option => {
            modelSelect.appendChild(option.cloneNode(true));
          });
          // Restore preserved value
          if (valueToPreserve) {
            modelSelect.value = valueToPreserve;
          }
        }
      });
    }
    
    markSelect.addEventListener('change', function() {
      const selectedMark = this.value;
      const currentModelValue = modelSelect.value;
      
      if (!selectedMark) {
        updateModelOptions(selectedMark, '');
      } else {
        updateModelOptions(selectedMark, currentModelValue);
      }
    });
    
    // Initialize on page load
    const currentMark = markSelect.value;
    const currentModel = modelSelect.value;
    if (currentMark) {
      updateModelOptions(currentMark, currentModel);
    } else {
      // If no mark is selected, show "Zgjedh marken" placeholder
      updateModelOptions('', '');
    }
  }
  
  // Synchronize desktop and mobile filters
  function syncFilters() {
    // Desktop to mobile sync
    const desktopSelects = ['mark', 'model', 'year', 'fuel', 'transmission', 'km_from', 'km_to'];
    
    desktopSelects.forEach(selectId => {
      const desktopSelect = document.getElementById(selectId);
      const mobileSelect = document.getElementById('mobile-' + selectId);
      
      if (desktopSelect && mobileSelect) {
        // Desktop to mobile
        desktopSelect.addEventListener('change', function() {
          mobileSelect.value = this.value;
        });
        
        // Mobile to desktop
        mobileSelect.addEventListener('change', function() {
          desktopSelect.value = this.value;
        });
      }
    });
    
    // Sync checkboxes for condition
    const desktopCheckboxes = document.querySelectorAll('input[name="condition[]"]:not([id*="mobile"])');
    const mobileCheckboxes = document.querySelectorAll('input[name="condition[]"][id*="mobile"], .mobile-filter-sheet input[name="condition[]"]');
    
    desktopCheckboxes.forEach((desktopCheckbox, index) => {
      const mobileCheckbox = mobileCheckboxes[index];
      if (mobileCheckbox) {
        // Desktop to mobile
        desktopCheckbox.addEventListener('change', function() {
          mobileCheckbox.checked = this.checked;
        });
        
        // Mobile to desktop
        mobileCheckbox.addEventListener('change', function() {
          desktopCheckbox.checked = this.checked;
        });
      }
    });
  }
  
  // Initialize mark/model filter
  initMarkModelFilter();
  
  // Initialize filter synchronization
  syncFilters();
