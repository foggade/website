---
title: Kontakt
form:
    name: contact
    fields:
        -
            name: name
            label: Name
            placeholder: 'Dein Vor- und Nachname'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            label: E-Mail
            placeholder: 'Deine Mailadresse'
            type: email
            validate:
                required: true
        -
            name: message
            label: Nachricht
            size: long
            placeholder: 'Dein Anliegen'
            type: textarea
            rows: 5
            validate:
                required: true
        -
            name: g-recaptcha-response
            label: Captcha
            type: captcha
            recaptcha_not_validated: 'Code ist ungültig!'
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Absenden
            classes: 'gdlr-button with-border excerpt-read-more'
        -
            type: reset
            value: Zurücksetzen
            classes: 'gdlr-button with-border excerpt-read-more'
    process:
        -
            captcha: null
        -
            email:
                from: '{{ form.value.email }}'
                to:
                    - '{{ config.plugins.email.from }}'
                subject: '[Anfrage über FvGGAD Kontaktformular] von: {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: feedback-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Danke für deine Anfrage. Wir kümmern uns schnellstmöglich darum.'
        -
            display: thankyou
---

