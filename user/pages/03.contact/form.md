---
title: Contact
form:
    name: my-nice-form
    fields:
        - name: name
          label: Hombre
          placeholder: Ingresa tu nombre
          autofocus: on
          autocomplete: on
          type: text
          validate:
            required: true

        - name: email
          label: Email
          placeholder: Ingresa tu email
          type: text
          validate:
            rule: email
            required: true

        - name: message
          label: Mensaje
          size: long
          placeholder: Exprésate...
          type: textarea
          validate:
            required: true

    buttons:
        - type: submit
          value: Submit
          classes: btn

    process:
        - email:
            from: "{{ config.plugins.email.from }}"
            to:
              - "{{ config.plugins.email.from }}"
              - "{{ form.value.email }}"
            subject: "[Feedback] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        - save:
            fileprefix: feedback-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        - message: Thank you for your feedback!
        - display: thankyou
---
