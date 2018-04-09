<?php

/*
 *
 * WP FORMS TEMPLATE REGISTRATION
 *
 */
if ( class_exists( 'WPForms_Template' ) ) :
    /**
     * Membership Contact Form
     * Template for WPForms.
     */
    class WPForms_Template_membership_contact_form extends WPForms_Template {

        /**
         * Primary class constructor.
         *
         * @since 1.0.0
         */
        public function init() {

            // Template name
            $this->name = 'Membership Contact Form';

            // Template slug
            $this->slug = 'membership_contact_form';

            // Template description
            $this->description = '';

            // Template field and settings
            $this->data = array (
                'field_id' => 7,
                'fields' => array (
                    0 => array (
                        'id' => '0',
                        'type' => 'name',
                        'label' => 'Name',
                        'format' => 'first-last',
                        'required' => '1',
                        'size' => 'medium',
                    ),
                    6 => array (
                        'id' => '6',
                        'type' => 'phone',
                        'label' => 'Phone',
                        'format' => 'us',
                        'description' => 'Best number to reach you.',
                        'required' => '1',
                        'size' => 'medium',
                    ),
                    1 => array (
                        'id' => '1',
                        'type' => 'email',
                        'label' => 'E-mail',
                        'required' => '1',
                        'size' => 'medium',
                    ),
                    4 => array (
                        'id' => '4',
                        'type' => 'select',
                        'label' => 'Pick a day:',
                        'choices' => array (
                            1 => array (
                                'label' => 'Sunday',
                            ),
                            2 => array (
                                'label' => 'Monday',
                            ),
                            3 => array (
                                'label' => 'Tuesday',
                            ),
                            4 => array (
                                'label' => 'Wednesday',
                            ),
                            5 => array (
                                'label' => 'Thursday',
                            ),
                            6 => array (
                                'label' => 'Friday',
                            ),
                            7 => array (
                                'label' => 'Saturday',
                            ),
                        ),
                        'description' => 'Let us know which day of the week is best to schedule a tour.',
                        'required' => '1',
                        'size' => 'medium',
                    ),
                    5 => array (
                        'id' => '5',
                        'type' => 'checkbox',
                        'label' => 'Pick a time:',
                        'choices' => array (
                            1 => array (
                                'label' => 'Morning',
                            ),
                            2 => array (
                                'label' => 'Afternoon (after 2:30pm)',
                            ),
                            4 => array (
                                'label' => 'Evening',
                            ),
                        ),
                        'description' => 'What time of day is best to reach you?',
                        'required' => '1',
                    ),
                    2 => array (
                        'id' => '2',
                        'type' => 'textarea',
                        'label' => 'Comment or Message',
                        'size' => 'medium',
                    ),
                ),
                'settings' => array (
                    'form_title' => 'Membership Contact Form',
                    'submit_text' => 'Submit',
                    'submit_text_processing' => 'Sending...',
                    'honeypot' => '1',
                    'notification_enable' => '1',
                    'notifications' => array (
                        1 => array (
                            'notification_name' => 'Default Notification',
                            'email' => 'kmartin@intensityclub.com',
                            'subject' => 'MEMBERSHIP: Schedule Tour Request',
                            'sender_name' => '{field_id="0"}',
                            'sender_address' => '{field_id="1"}',
                            'message' => '{all_fields}',
                        ),
                    ),
                    'confirmation_type' => 'message',
                    'confirmation_message' => 'Thanks for contacting us! We will be in touch with you shortly.',
                    'confirmation_message_scroll' => '1',
                    'confirmation_page' => '10257',
                ),
                'meta' => array (
                    'template' => 'membership_contact_form',
                ),
            );
        }
    }
    new WPForms_Template_membership_contact_form;

    /**
     * TN | Spring | DS
     * Template for WPForms.
     */
    class WPForms_Template_Youth_Registration extends WPForms_Template {

        /**
         * Primary class constructor.
         *
         * @since 1.0.0
         */
        public function init() {

            // Template name
            $this->name = 'Youth Registration Form';

            // Template slug
            $this->slug = 'youth__registration__form';

            // Template description
            $this->description = '';

            // Template field and settings
            $this->data = array (
                'field_id' => 17,
                'fields' => array (
                    5 => array (
                        'id' => '5',
                        'type' => 'name',
                        'label' => 'Name',
                        'format' => 'first-last',
                        'required' => '1',
                        'size' => 'large',
                    ),
                    1 => array (
                        'id' => '1',
                        'type' => 'email',
                        'label' => 'E-mail',
                        'required' => '1',
                        'size' => 'large',
                    ),
                    11 => array (
                        'id' => '11',
                        'type' => 'phone',
                        'label' => 'Phone',
                        'format' => 'us',
                        'required' => '1',
                        'size' => 'large',
                    ),
                    0 => array (
                        'id' => '0',
                        'type' => 'name',
                        'label' => 'Player\'s Name',
                        'format' => 'simple',
                        'required' => '1',
                        'size' => 'large',
                    ),
                    12 => array (
                        'id' => '12',
                        'type' => 'date-time',
                        'label' => 'Player\'s Date of Birth',
                        'format' => 'date',
                        'required' => '1',
                        'size' => 'medium',
                        'date_format' => 'm/d/Y',
                        'date_type' => 'dropdown',
                        'time_format' => 'g:i A',
                        'time_interval' => '30',
                    ),
                    14 => array (
                        'id' => '14',
                        'type' => 'html',
                        'code' => '<p><b>Payment</b></p>
<p style="text-align: justify;">Payment is due when registering.	If you do not have a credit card on file we will contact you for payment details.</p><br>
<p style="text-align: justify;">Registering does not guarantee your spot as certain days and times may have already filled or not be the appropriate level for the player.	We	will notify you of any issues as soon as possible. When registering you agree to adhere by INTENSITY\'s policies as stated under "FAQ & Policies" on the program page.</p>',
                        'label_disable' => '1',
                    ),
                ),
                'settings' => array (
                    'form_title' => 'Youth Registration Form',
                    'submit_text' => 'Register',
                    'submit_text_processing' => 'Processing...',
                    'submit_class' => '.discovery',
                    'honeypot' => '1',
                    'notification_enable' => '1',
                    'notifications' => array (
                        1 => array (
                            'notification_name' => 'Default Notification',
                            'email' => 'emarcus@intensityclub.com',
                            'carboncopy' => '{field_id="1"}',
                            'subject' => 'New Registration: Youth Registration Form',
                            'sender_name' => '{field_id="5"} Player: {field_id="0"}',
                            'sender_address' => '{field_id="1"}',
                            'message' => '{all_fields}',
                        ),
                    ),
                    'confirmation_type' => 'message',
                    'confirmation_message' => '<p style="text-align: justify;">Thank you for registering for the program.</p><p style="text-align: justify;"><b>PAYMENT:</b> Payment is due when registering. If you do not have a credit card on file we will contact you for payment details.</p><p style="text-align: justify;">Registering does not guarantee your spot as certain days and times may have already filled or not be the appropriate level for the player. We will notify you of any issues as soon as possible.</p><p style="text-align: justify;">When registering you agree to adhere by INTENSITY\'s policies:</p><p style="text-align: justify;"><b>REGISTRATION:</b> Spaces are limited and INTENSITY reserves the right to not accept a registration. INTENSITY makes every effort to ensure that the programs run to schedule but reserves the right to re-schedule in the event of insufficient sign-ups or events beyond the club’s control.</p><p style="text-align: justify;"><b>LIABILITY WAIVER:</b> Due to the nature of the sport injuries can occur, registrant acknowledges the risks and waives INTENSITY of any liability for such.</p><p style="text-align: justify;"><b>CANCELLATION POLICY:</b> Cancellations for camps or clinics must be in writing and will be accepted up to one week prior to the start of the session for refunds.</p><p style="text-align: justify;"><b>ABSENCES:</b> Due to the popularity of our programs, make-ups are not offered.</p><p style="text-align: justify;"><b>INJURIES:</b> A doctor’s note is required in any case where make-ups are deemed an appropriate remedy for missed classes or, in the case of a prolonged injury, where a house credit may be issued for future use in a similar future program. Refunds are NOT offered and registrant agrees to make payment in full for all registered programs. Registrant agrees to pay INTENSITY reasonable attorney’s fees and costs in connection with collection of any amounts owed.</p><p style="text-align: justify;"><b>VIDEO / LIVE STREAMING:</b> The club uses video/live streaming technology for informational use as a teaching tool during lessons, clinics and matches. Registrant confirms that they are aware of this and gives permission for it’s use.</p><p>Thank you, Elynne Marcus INTENSITY</p>',
                    'confirmation_page' => '15337',
                ),
                'meta' => array (
                    'template' => 'youth__registration__form',
                ),
            );
        }
    }
    new WPForms_Template_Youth_Registration;

endif;
