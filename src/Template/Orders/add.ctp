<div class="page-header">
    <div class="row">
        <div class="col-md-12">
            <h1>Checkout</h1>
        </div>
    </div>
</div>
<div class="prod-add-form">
    <?= $this->Form->create($order); ?>
    <div class="row">
        <div class="col-sm-8 col-md-9">
            <?= $this->Form->input('f_name', ['label' => 'First Name']); ?>
            <?= $this->Form->input('l_name', ['label' => 'Last Name']); ?>
            <?= $this->Form->input('phone_num', ['label' => 'Phone Number']); ?>
            <?= $this->Form->input('street', ['label' => 'Street Address']); ?>
            <?= $this->Form->input('apt_num', ['label' => 'Apartment, Suite, Unit etc (optional)']); ?>
            <div class="row">
                <div class="col-md-4">
                    <?= $this->Form->input('city', ['label' => 'Town/City']); ?>
                </div>
                <div class="col-md-4">
                    <?= $this->Form->label('state')?>
                    <?= $this->Form->select('state', [
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
                </div>
                <div class="col-md-4">
                    <?= $this->Form->input('zip', ['label' => 'Zip']); ?>
                </div>
            </div>
            <div class="cc-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8">
                                <?= $this->Form->input('card-number', ['type' => 'number', 'label' => 'Card Number']) ?>
                                
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->input('card-number', ['type' => 'password', 'label' => 'Security Code', 'pattern' => '[0-9]*'])?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?= $this->Form->input('card-number', ['label' => 'Name on Card'])?>
                                
                            </div>
                            <div class="col-md-6">
                                <?= $this->Form->label('Expiration (M/Y)')?>

                                <?= $this->Form->month('exp-month', ['empty' => false, 'class' => 'exp-year']); ?>
                                /
                                <?= $this->Form->year('exp- year', ['minYear' => 2016, 'maxYear' => 2026, 'empty' => false, 'class' => 'exp-year']); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 offset-md-8 text-right">
                                <span>Credit Card Type</span>
                                <div class="credit-cart-type"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                
            </div>
            <?= $this->Form->hidden('country', ['value' => 'United States']); ?>
            <?= $this->Form->button(__('Check Out')); ?>
            <?= $this->Form->end(); ?>
        </div>
    </div>
</div>
<?= $this->Html->script('cc-validation'); ?>