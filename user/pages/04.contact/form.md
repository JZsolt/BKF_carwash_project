---

form:
    name: contact

    fields:
        - name: name
          label: Name
          placeholder: Nume si prenume
          autocomplete: on
          type: text
          validate:
            required: true

        - name: email
          label: email
          placeholder: Adresa de email
          type: email
          validate:
            required: true

        - name: message
          label: Message
          placeholder: Mesaj
          type: text
          validate:
            required: true

    buttons:
        - type: submit
          value: Trimite mesaj

    process:
        - email:
            subject: "[Site Contact Form] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
            from: office@bkf-carwash.ro
            from_name: 'Office BKF'


        - message: Multiumim pentru mesaj. Va contactam in cel mai scurt timp posibil.
        - display: thankyou
---
