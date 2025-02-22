<div>
    <x-modal yesOrNo modalId="{{ $modalId }}" modalTitle="Delete Resource">
        <x-slot:modalBody>
            <p>This resource will be deleted. It is not reversible. <br>Please think again.</p>
        </x-slot:modalBody>
    </x-modal>
    <h2>Danger Zone</h2>
    <div class="">Woah. I hope you know what are you doing.</div>
    <h4 class="pt-4">Delete Resource</h4>
    <div class="pb-4">This will stop your containers, delete all related data, etc. Beware! There is no coming
        back!
    </div>
    <x-forms.button isError isModal modalId="{{ $modalId }}">
        Delete
    </x-forms.button>
</div>
