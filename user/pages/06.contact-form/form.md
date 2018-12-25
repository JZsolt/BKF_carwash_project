---

form:
    name: contact-form

    fields:
        - name: name
          label: Name
          placeholder: Enter your name
          autocomplete: on
          type: text
          validate:
            required: true

        - name: email
          label: asd
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

    buttons:
        - type: submit
          value: Submit
        - type: reset
          value: Reset

    process:
        - email:
            subject: "[Site Contact Form] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
            from: office@bkf-carwash.ro
            from_name: 'Office BKF'


        - message: Multiumim pentru mesaj. Va contactam in cel mai scurt timp posibil.
        - display: thankyou
---
<div id="map">
          </div>