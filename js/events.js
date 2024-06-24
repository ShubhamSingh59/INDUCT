document.addEventListener('DOMContentLoaded', addEventToDOM);
async function addEventToDOM() {
    try {
        const response = await axios.get('/api/events')
        console.log(response.data['results']);
        const eventsContainer = document.getElementById('eventsContainer');
        //eventsContainer.innerHTML = '';  // Clear existing events

        response.data['results'].forEach(event => {
            const newEventElement = document.createElement('div');
            newEventElement.className = 'col-md-5 even-box';
            newEventElement.style = 'margin-right: 3% '
            newEventElement.innerHTML = `
                    <p>
                        <i class="far fa-calendar" style="color: #1777E5;text-align: left"></i> <span>${new Date(event.date).toLocaleDateString('en-US', { day: '2-digit', month: 'short', year: 'numeric' })}</span>
                        <i class="fas fa-map-marker-alt" style="color: #1777E5; text-align: left"></i> <span>${event.location}</span>
                    </p>
                    <h4 style="text-align: left;">${event.eventName}</h4>
                    <p>${event.description}</p>
                    <button type="button" class="btn btn-primary joinEvent" style="self-align:left" onclick="openJoinForm('${event.eventName}')">Join Event</button>
            `;
            eventsContainer.appendChild(newEventElement);
        });
    }
    catch (error) {
        console.error('Error adding event:', error);
        alert('Failed to add event.');
    }

}

function openJoinForm(eventName) {
    const formContainer = document.getElementById('joinEventFormContainer');
    const eventNameInput = document.getElementById('popupEventName');
    const overlay = document.getElementById('overlay');
    eventNameInput.value = eventName;
    formContainer.classList.remove('hidden');
    overlay.style.display = 'block';
}
function closeJoinForm() {
    const formContainer = document.getElementById('joinEventFormContainer');
    const overlay = document.getElementById('overlay');
    const joinEventForm = document.getElementById('joinEventForm');
    formContainer.classList.add('hidden');
    overlay.style.display = 'none';
    joinEventForm.reset();
}
document.getElementById('joinEventForm').addEventListener('submit', async function (event) {
    event.preventDefault();
    const eventName = document.getElementById('popupEventName').value;
    const yourName = document.getElementById('yourName').value;
    const yourEmail = document.getElementById('yourEmail').value;
    const yourDesignation = document.getElementById('Designation').value;
    const yourNumber = document.getElementById('yourNumber').value;
    const joinData = { eventName, yourName, yourEmail, yourDesignation, yourNumber };
    console.log(joinData);
    try {
        const response = await axios.post('/api/join-event', joinData, {
            headers: { 'Content-Type': 'application/json' }
        });
        if (response.status === 200) {
            alert('Successfully joined the event!');
            document.getElementById('joinEventFormContainer').style.display = 'none';
            window.location.href = '/'
        }
    } catch (error) {
        console.error('Error joining event:', error);
        alert('Failed to join event.');
    }
});