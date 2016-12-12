<div class="page-header">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit User Profile</h1>
        </div>
    </div>
</div>
<div class="prod-add-form">
    <?= $this->Form->create($user); ?>
    <div class="row">
        <div class="col-sm-12">
            <legend>Personal Information</legend>
            <?= $this->Form->input('username') ?>
            <?= $this->Form->input('profile.f_name', ['label' => 'First Name']); ?>
            <?= $this->Form->input('profile.l_name', ['label' => 'Last Name']); ?>
            <?= $this->Form->input('profile.phone_num', ['label' => 'Phone Number']); ?>
            <?= $this->Form->input('profile.street', ['label' => 'Street Address']); ?>
            <?= $this->Form->input('profile.apt_num', ['label' => 'Apartment, Suite, Unit etc (optional)']); ?>
            <?= $this->Form->input('profile.city', ['label' => 'Town/City']); ?>
            <?= $this->Form->select('profile.state', [
                    '' => 'Choose State',
                    'AL' => 'Alabama',
                    'AK' => 'Alaska',
                    'AZ' => 'Arizona',
                    'AR' => 'Arkansas',
                    'CA' => 'California',
                    'CO' => 'Colorado',
                    'CT' => 'Connecticut',
                    'DE' => 'Delaware',
                    'DC' => 'District of Columbia',
                    'FL' => 'Florida',
                    'GA' => 'Georgia',
                    'HI' => 'Hawaii',
                    'ID' => 'Idaho',
                    'IL' => 'Illinois',
                    'IN' => 'Indiana',
                    'IA' => 'Iowa',
                    'KS' => 'Kansas',
                    'KY' => 'Kentucky',
                    'LA' => 'Louisiana',
                    'ME' => 'Maine',
                    'MD' => 'Maryland',
                    'MA' => 'Massachusetts',
                    'MI' => 'Michigan',
                    'MN' => 'Minnesota',
                    'MS' => 'Mississippi',
                    'MO' => 'Missouri',
                    'MT' => 'Montana',
                    'NE' => 'Nebraska',
                    'NV' => 'Nevada',
                    'NH' => 'New Hampshire',
                    'NJ' => 'New Jersey',
                    'NM' => 'New Mexico',
                    'NY' => 'New York',
                    'NC' => 'North Carolina',
                    'ND' => 'North Dakota',
                    'OH' => 'Ohio',
                    'OK' => 'Oklahoma',
                    'OR' => 'Oregon',
                    'PA' => 'Pennsylvania',
                    'RI' => 'Rhode Island',
                    'SC' => 'South Carolina',
                    'SD' => 'South Dakota',
                    'TN' => 'Tennessee',
                    'TX' => 'Texas',
                    'UT' => 'Utah',
                    'VT' => 'Vermont',
                    'VA' => 'Virginia',
                    'WA' => 'Washington',
                    'WV' => 'West Virginia',
                    'WI' => 'Wisconsin',
                    'WY' => 'Wyoming',
                ]
            ); ?>
            <?= $this->Form->hidden('profile.country', ['value' => 'United States']); ?>
        </div>
            <?= $this->Form->button(__('Save Changes')); ?>
            <?= $this->Form->end(); ?>
        </div>
    </div>
</div>