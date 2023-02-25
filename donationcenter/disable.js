// disable the last checkbox if any of the rest are chosen, and vice versa.
            var $checkboxes = $('input[type="checkbox"]');

    $checkboxes.on('change', function() {

        if (this.checked) {
            var colour = this.value.split('//')[0];

            $checkboxes.filter(function() {
                return this.value.split('//')[0] != colour;
            }).prop('disabled', true);
        }

        if (! $checkboxes.filter(':checked').length) {
            $checkboxes.prop('disabled', false);
        }

    });
