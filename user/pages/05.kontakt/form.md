---
title: Kontakt
form:
    name: contact
    fields:
        - name: name
          label: Name
          placeholder: Dein Vor- und Nachname
          autofocus: on
          autocomplete: on
          type: text
          validate:
            required: true

        - name: email
          label: E-Mail
          placeholder: Deine Mailadresse
          type: text
          validate:
            rule: email
            required: true

        - name: message
          label: Nachricht
          size: long
          placeholder: Dein Anliegen
          type: textarea
          validate:
            required: true
            
        - name: g-recaptcha-response
          label: Captcha
          type: captcha
          recatpcha_site_key: 6Ld8OQ8TAAAAAOhiyI_D6lB6COlyer76Blx_Fwgo
          recaptcha_not_validated: 'Captcha nicht korrekt!'
          validate:
            required: true

    buttons:
        - type: submit
          value: Absenden
          classes: gdlr-button with-border excerpt-read-more
        - type: reset
          value: Zurücksetzen
          classes: gdlr-button with-border excerpt-read-more

    process:
        - email:
            from: "{{ config.plugins.email.from }}"
            to:
              - "{{ config.plugins.email.from }}"
              - "{{ form.value.email }}"
            subject: "[Anfrage über FvGGAD-Website Kontaktformular] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        - save:
            fileprefix: feedback-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        - message: Danke für deine Nachricht.
        - display: thankyou
---