public interface ProcessEventListener {


  void beforeProcessStarted( ProcessStartedEvent event );

  void afterProcessStarted( ProcessStartedEvent event );

  void beforeProcessCompleted( ProcessCompletedEvent event );

  void afterProcessCompleted( ProcessCompletedEvent event );

  void beforeNodeTriggered( ProcessNodeTriggeredEvent event );

  void afterNodeTriggered( ProcessNodeTriggeredEvent event );

  void beforeNodeLeft( ProcessNodeLeftEvent event );

  void afterNodeLeft( ProcessNodeLeftEvent event );

  void beforeVariableChanged(ProcessVariableChangedEvent event);

  void afterVariableChanged(ProcessVariableChangedEvent event);


}