public interface RuntimeManager {


    /**

     * Returns <code>RuntimeEngine</code> instance that is fully initialized:

     * <ul>

     *  <li>KiseSession is created or loaded depending on the strategy</li>

     *  <li>TaskService is initialized and attached to ksession (via listener)</li>

     *  <li>WorkItemHandlers are initialized and registered on ksession</li>

     *  <li>EventListeners (process, agenda, working memory) are initialized and added to ksession</li>

     * </ul>

     * @param context the concrete implementation of the context that is supported by given <code>RuntimeManager</code>

     * @return instance of the <code>RuntimeEngine</code>

     */

    RuntimeEngine getRuntimeEngine(Context<?> context);

    

    /**

     * Unique identifier of the <code>RuntimeManager</code>

     * @return

     */

    String getIdentifier();

   

    /**

     * Disposes <code>RuntimeEngine</code> and notifies all listeners about that fact.

     * This method should always be used to dispose <code>RuntimeEngine</code> that is not needed

     * anymore. <br/>

     * ksession.dispose() shall never be used with RuntimeManager as it will break the internal

     * mechanisms of the manager responsible for clear and efficient disposal.<br/>

     * Dispose is not needed if <code>RuntimeEngine</code> was obtained within active JTA transaction, 

     * this means that when getRuntimeEngine method was invoked during active JTA transaction then dispose of

     * the runtime engine will happen automatically on transaction completion.

     * @param runtime

     */

    void disposeRuntimeEngine(RuntimeEngine runtime);

    

    /**

     * Closes <code>RuntimeManager</code> and releases its resources. Shall always be called when

     * runtime manager is not needed any more. Otherwise it will still be active and operational.

     */

    void close();

    

}