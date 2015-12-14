title: Kontakt
form:
    name: contact

    fields:
        - name: name
          label: Name
          placeholder: Enter your name
          autofocus: on
          autocomplete: on
          type: text
          validate:
            required: true

        - name: email
          label: Email
          placeholder: Enter your email address
          type: email
          validate:
            required: true

        - name: message
          label: Message
          placeholder: Enter your message
          type: textarea
          validate:
            required: true

        - name: g-recaptcha-response
          label: Captcha
          type: captcha
          recatpcha_site_key: 6Ld8OQ8TAAAAAOhiyI_D6lB6COlyer76Blx_Fwgo
          recaptcha_not_validated: 'Captcha not valid!'
          validate:
            required: true

    buttons:
        - type: submit
          value: Submit
        - type: reset
          value: Reset

    process:
        - captcha:
            recatpcha_secret: 6Ld8OQ8TAAAAAMOF4s6joUZv-FOvAefTKQ9X4Kg7
        - email:
            from: "{{ config.plugins.email.from }}"
            to:
          - "{{ config.plugins.email.from }}"
            subject: "[Site Contact Form] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        - save:
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        - message: Danke für deine Nachricht.
        - display: thankyou

---